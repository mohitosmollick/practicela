<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Exception;


class SiteController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function singlePost(){
        return view('frontend.single-post');
    }
    public function register(){
        return view('frontend.Auth.register');
    }
    public function registation(Request $request){
        $request->validate([
           "name" => "required| String",
            "email" => "required|email",
            "password" => "required|min:6|same:confirm_password",
//            "photo" => ["required", "image"],
        ]);


//        $image = $request->file('photo');
//
//        if ($image->isValid()){
//            $input = rand(11111, 99999).date('ymdhis.').$image->getClientOriginalExtension();
//            $path = public_path('/image');
//            $image->move($path, $input);
//        }


        try {
            User::create([
                'name'      => $request->name,
                'email'     => $request->email,
                'password'  => bcrypt($request->password)
            ]);
            session()->flash('type', 'success');
            session()->flash('messag', 'Resistration success');

        }catch (Exception $e){
            session()->flash('type', 'danger');
            session()->flash('messag', 'test');
        }

        return redirect()->back();

    }
    public function login(){
        return view('frontend.Auth.login');
    }
    public function loginform(Request $request){
        $data = $request->validate([
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        if (auth()->attempt($data)){
           return redirect('/');
        }else{
            session()->flash('type', 'danger');
            session()->flash('messag','Password and Email does`t match');
            return redirect()->back();
        }

    }
    public function logout(){
        \auth()->logout();
        return redirect('/');
    }

}
