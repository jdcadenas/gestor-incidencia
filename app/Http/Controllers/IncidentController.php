<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use App\Models\Project;
use Illuminate\Http\Request;
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

        $rules = [
          //  'category_id' => 'sometimes|exists:categories,id',
            'severity' => 'required|in:M,N,A',
            'title' => 'required|min:5',
            'description' => 'required|min:15'
        ];
        $messages = [
          //  'category_id.exists' => 'La categoría seleccionada no existe en nuestra base de datos',
            'title.required' => 'Es necesario ingresar un título para la incidencia',
            'title.min' => 'el título debe tener al menos 5 caracteres',
            'description.required' => 'Es necesario ingresar una descripción para la incidencia',
            'description.min' => 'La descripción debe tener mínimo 15 caracteres'


        ];


        $this->validate($request, $rules, $messages);

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
        $incident=Incident::findOrFail($id);
        return view('incidents.show')->with(compact('incident'));
    }
}
