<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectUser;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users=User::where('role',1)->get();
        return view('admin.users.index')->with(compact('users'));
    }


    public function store(Request $request)
    {
        $rules=[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ];
        $messages=[
            'name.required'=>"Es necesario ingresar el nombre del usuario",
            'name.max'=>'El nombes es demasiado extenso',
            'email.required' =>'Es indispensable ingresar el e-mail del usuario',
            'email.max'=>'El e-mail es demasiado extenso',
            'email.unique'=>'Este e-mail ya se encuentra en uso',
            'password.required' => 'Olvidó ingresar una contraseña',
            'password.min'=> 'La contraseña debe presentar al menos 6 caracteres'
        ];
        $this->validate($request,$rules,$messages);
        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));

        $user->role=1;

        $user->save();

        return back()->with('notification','Usuario registrado exitosamente.');
    }

    public function edit($id)
    {

        $user=User::find($id);
        $projects=Project::all();

        $project_user=ProjectUser::where('user_id',$user->id)->get();

        return view('admin.users.edit')->with(compact('user','projects','project_user'));
    }
    public function update($id,Request $request)
    {
        $rules=[
            'name' => 'required|max:255',
            'password' => 'min:6',
        ];
        $messages=[
            'name.required'=>"Es necesario ingresar el nombre del usuario",
            'name.max'=>'El nombes es demasiado extenso',

            'password.min'=> 'La contraseña debe presentar al menos 6 caracteres'
        ];
        $this->validate($request,$rules,$messages);

        $user=User::find($id);
        $user->name=$request->input('name');
        $password = $request->input('password');
        if($password)
        $user->password=bcrypt($password);
        $user->save();
        return back()->with('notification','Usuario modificado exitosamente');
    }

    public function delete($id){
        $user=User::find($id);
        $user->delete();

        return back()->with('notification','El usuraio se ha dado de baja satisfactoriamente');
    }
}
