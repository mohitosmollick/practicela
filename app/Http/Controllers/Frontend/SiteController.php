<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
            "photo" => ["required", "image"],
        ]);

        $image = $request->file('photo');
        $input = rand(11111, 99999).date('ymdhis.').$image->getClientOriginalExtension();
        $path = public_path('/image');
        $image->move($path, $input);

        session()->flash('messag', 'Resistration success');
        return redirect()->back();

    }
    public function login(){
        return view('frontend.Auth.login');
    }
    public function loginform(Request $request){
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

    }

}
