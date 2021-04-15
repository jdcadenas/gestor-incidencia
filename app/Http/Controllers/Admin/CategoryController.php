<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ],[
            'name.required' => 'Es necesario ingresar un nombre para la categoría'
        ]);
            Category::create($request->all());

            return back();
    }
    public function update(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ],[
            'name.required' => 'Es necesario ingresar un nombre para la categoría'
        ]);
        $category_id=$request->input('category_id');
            $category=Category::find($category_id);
            $category->name=$request->input('name');
            $category->save();
            return back();
    }
    public function delete($id){
        $user=Category::find($id);
        $user->delete();

        return back();
    }
}
