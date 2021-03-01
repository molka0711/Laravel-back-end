<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function postLogin(Request $request)
    {
       request()->validate([
           'name'=>'required',
           'password'=>'required',
       ]);
       $credentials =$request->only('name','password');
       if(Auth::attempt($credentials)){
           //Authentification passed.. 
           return redirect() ->intended('home');
       } 
       return Redirect::to('/')->withSuccess('Oopps! You have entered invalid credentials');
    }
    public function postRegister(Request $request){
        request() ->validate([
            'name'=>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6',
        ]);
        $data =$request->all();
        $check=$this->create($data);
        return Redirect::to('/')->withSuccess('Great! You have successfully logged in');

    }
    public function home()
    {
        if (Auth::check()){
            return view('home');
        }
        return Redirect::to("login")-> withSuccess('Ooops! You do not have access');

    }
    public function create(array $data)
    {
        return user::create([
            'name'=>$data['name'],
            'email' => $data['email'],    
            'password' => Hash::make($data['password'])
                    ]);
    } 
    public function logout(){
        session ::flush();
        Auth::logout();
        return Redirect ('login');
    }
}
