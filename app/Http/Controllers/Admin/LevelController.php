<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function byproject($id){

        return Level::where('project_id',$id)->get();
    }
    
    public function store(Request $request)
    {
    $this->validate($request,[
        'name'=>'required'
    ],[
        'name.required' => 'Es necesario ingresar un nombre parael nivel'
    ]);
       Level::create($request->all());

        return back();
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ],[
            'name.required' => 'Es necesario ingresar un nombre para la categoría'
        ]);
        $level_id=$request->input('level_id');
            $level=Level::find($level_id);
            $level->name=$request->input('name');
            $level->save();
            return back();
    }
    public function delete($id){
        $user=Level::find($id);
        $user->delete();

        return back();
    }
}
