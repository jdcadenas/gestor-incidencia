<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\ProjectUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * show the applcation dashboard
     *
     * @return Illuminate\Http\Response;
     *
     */
    public function index()
    {
        $user = Auth::user();
        $select_project_id = $user->select_project_id;

        if ($user->is_support) {
            $my_incidents = Incident::where('project_id', $select_project_id)->where('support_id', $user->id)->get();

            $projectUser = ProjectUser::where('project_id', $select_project_id)->where('user_id', $user->id)->first();

            $pending_incidents = Incident::where('support_id', null)->where('level_id', $projectUser->level_id)->get();

            $incidents_by_me = Incident::where('client_id', $user->id)->where('project_id', $select_project_id)->get();
            return view('dashboard')->with(compact('my_incidents', 'pending_incidents', 'incidents_by_me'));
        }
        $incidents_by_me = Incident::where('client_id', $user->id)->where('project_id', $select_project_id)->get();

        return view('dashboard')->with(compact( 'incidents_by_me'));
    }

    public function selectProject($id)
    {
        $user = Auth::user();

        $user->select_project_id = $id;
        $user->save();
        return back();
    }
}
