<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        return view('dashboard');
}

public function getReport(){

        $categories = DB::table('categories')->where('project_id','=', 1)->get();

        return view('report', ['categories' => $categories]);
}
public function postReport(Request $request)
{

    $rules=[
        'category_id' =>'sometimes|exists:categories,id',
        'severity'=>'required|in:M,N,A',
        'title'=>'required|min:5',
        'description'=>'required|min:15'
    ];
$messages =[
'category_id.exists' => 'La categoría seleccionada no existe en nuestra base de datos',
'title.required' =>'Es necesario ingresar un título para la incidencia',
'title.min'=>'el título debe tener al menos 5 caracteres',
'description.required'=>'Es necesario ingresar una descripción para la incidencia',
'description.min'=> 'La descripción debe tener mínimo 15 caracteres'


];


$this->validate($request,$rules,$messages);

    $incident= new Incident();
    $incident->category_id=$request->input('category_id') ?:null;
    $incident->severity=$request->input('severity') ;
    $incident->title=$request->input('title') ;
    $incident->description=$request->input('description');
    $incident->client_id=auth()->user()->id;
    $incident->save();
return back();

}

}
