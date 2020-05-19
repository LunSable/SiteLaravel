<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RolesRequest;
use App\roles;
use App\User;

class RolesController extends Controller
{
    public function submit(RolesRequest $req){
        
        $Role=new roles;
        $Role->id=$req->input('id_role');
        $Role->name=$req->input('role_name');
        $Role->save();
        return view('addRole');
    }
    public function AddUser(Request $req){
        
        $Roles=Roles::all();
        $User=new User;
        $User->name=$req->input('login');
        $User->email=$req->input('email');
        $User->password=bcrypt($req->input('pass'));
        $User->save();
        return view('addUser',['roles'=>$Roles]);
    }
    public function AddUserRoute(){
        
        $Roles=Roles::all();
        return view('addUser',['roles'=>$Roles]);
    }
    public function AddForm(){

        return view('addRole');
    }
    public function ViewUsers(){

        $users=User::all();
        return view('users',['users'=>$users]);
    }
    public function ChangeUser($id){
        $roles=roles::all();
        $user=new User;
        return view('ChangeRole',['data'=>$user->find($id)],['roles' => $roles]);
    }
    public function Update($id,Request $req){
        $users=User::all();
        $user=User::find($id);
        $user->name=$req->input('login');
        $user->email=$req->input('email');
        $user->password=bcrypt($req->input('pass'));
        $user->idRole=$req->input('id_role');
        $user->save();
        return redirect()->route('role-change-refresh',['users'=>$users]);
    }
    public function OneDelete($id){

        $users=User::all();
        $user=User::find($id)->delete();
        return redirect()->route('role-change-refresh',['users'=>$users]);
    }

}
