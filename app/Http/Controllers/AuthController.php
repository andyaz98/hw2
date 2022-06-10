<?php

use Illuminate\Routing\Controller as BaseController;

class AuthController extends BaseController
{
    public function login(){
        if(session('user_id')!=null){
            return view("home");
        }
        else{
            $old_username=Request::old('username');
            return view("login")
            ->with("csrf_token",csrf_token())
            ->with("old_username",$old_username);
        }
    }
    public function checkLogin(){
        //Effettuo una query al db tramite ORM
        $user=User::where("username",request("username"))->where("password",request("password"))->first();
        
        if(isset($user)){
           //Credenziali corrette
           Session::put('user_id', $user->id);
           return redirect("home");
        }
        else{
           //Credenziali errate
           return redirect("login")
              ->withInput();
        }
    }
        
    public function logout(){
        Session::flush();
        return redirect('home');
    }

    public function getUsers(){
        $users=User::all();
        return $users;
    }

    public function signup(){
        if(session('user_id')!=null){
            return view('home');
        }
        else{
            return view("signup")
               ->with("csrf_token",csrf_token());
        }
    }

    public function registerUser(){
        $user=new User;
        $user->username=request("username");
        $user->password=request("password");
        $user->save();
        Session::put('user_id',$user->id);
        $user=User::find(session('user_id'));
        return view('signup')
           ->with("username",$user->username);
    }
}
