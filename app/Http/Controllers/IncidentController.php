<?php

namespace App\Http\Controllers;

use App\Models\Incident;

use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IncidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {

        $categories = DB::table('categories')->where('project_id', '=', 1)->get();

        return view('incidents.create', ['categories' => $categories]);
    }


    public function store(Request $request)
    {

       

        $this->validate($request, Incident::$rules, Incident::$messages);

        $incident = new Incident();
        $incident->category_id = $request->input('category_id') ?: null;
        $incident->severity = $request->input('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');
        $incident->client_id = auth()->user()->id;
        $incident->project_id = auth()->user()->select_project_id;

        // dd( $incident->project_id);
        $incident->level_id = Project::find(auth()->user()->select_project_id)->first_level_id;

        $incident->save();
        return back();
    }

    public function show($id)
    {
        $incident = Incident::findOrFail($id);

        return view('incidents.show')->with(compact('incident'));
    }

    public function take($id)
    {
        $user=Auth::user();

        if(! $user->is_support)
            return back();

        $incident = Incident::findOrFail($id);

        //there is a relationship between user and project
        $project_user = ProjectUser::where('project_id',$incident->project_id)->where('user_id',$user->id)->first();

        if(!$project_user)
            return back();
        // The level is the same
        if($project_user->level_id!= $incident->level_id)
            return back();

        $incident->support_id=$user->id;
        $incident->save();

        return back();
    }
    public function solve($id)
    {
        $incident = Incident::findOrFail($id);

        if($incident->client_id!=Auth::user()->id)
        return back();


        $incident->active=0;

        $incident->save();
        return back();

    }
    public function open($id)
    {
        $incident = Incident::findOrFail($id);

        if($incident->client_id!=Auth::user()->id)
        return back();


        $incident->active=1;

        $incident->save();
        return back();
    }
    public function edit($id)
    {
        $incident = Incident::findOrFail($id);
        $categories=$incident->project->categories;
        return view('incidents.edit')->with(compact('incident','categories'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request, Incident::$rules, Incident::$messages);

        $incident =Incident::findOrFail($id);
        $incident->category_id = $request->input('category_id') ?: null;
        $incident->severity = $request->input('severity');
        $incident->title = $request->input('title');
        $incident->description = $request->input('description');
       
        $incident->save();
        return redirect("/ver/$id");
    }
    public function nextlevel($id)
    {
        $incident = Incident::findOrFail($id);
        $level_id=$incident->level_id;

        $project=$incident->project;
        $levels=$project->levels;

        $next_level_id=$this->getNextLevelId($level_id,$levels);
        if($next_level_id){
        $incident->level_id=$next_level_id;
        $incident->support_id=null;
        $incident->save();
            return back();

        }

        return back()->with('notification','No es posible derivar porque no hay siguiente nivel');
    }

    public function getNextLevelId($level_id,$levels)
    {
        if(sizeof($levels) <= 1)
            return null;
        $position=-1;
        for ($i=0; $i < sizeof($levels)-1; $i++) {
            if($levels[$i]->id == $level_id){
                $position=$i;
                break;
            }
        }
        if($position == -1)
            return null;

        return $levels[$position+1]->id;
    }
}
