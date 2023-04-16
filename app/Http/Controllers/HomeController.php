<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Query\IndexHint;

class HomeController extends Controller
{
    public function index(){
        return view("home.index");
    }
    public function login(){
        return redirect("login");
    }
    public function single(){
        return view("home.single");
    }
    public function loggedIN(){
        if(Auth::id()){
            return view('home.home');
        }
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}

