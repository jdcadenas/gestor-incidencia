<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects=Project::withTrashed()->get();

        return view('admin.project.index')->with(compact('projects'));

    }
    public function store(Request $request){


        $this->validate($request,Project::$rules,Project::$messages);
        Project::create($request->all());
        return back()->with('notification','El proyecto se ha registrado satisfactoriamente');

    }
    public function edit($id){
        $project=Project::find($id);
        $categories=$project->categories;
        $levels=$project->levels;

        return view('admin.project.edit')->with(compact('project','categories','levels'));
    }
    public function update($id,Request $request){
        $this->validate($request,Project::$rules,Project::$messages);
        Project::find($id)->update($request->all());
        return back()->with('notification','El proyecto se ha registrado satisfactoriamente');
    }
    public function delete($id){
        Project::find($id)->delete();
        return back()->with('notification','El proyecto se ha deshabilitado correctamente');
    }
    public function restore($id){
        Project::withTrashed()->find($id)->restore();
        return back()->with('notification','El proyecto se ha habilitado correctamente');
    }
}
