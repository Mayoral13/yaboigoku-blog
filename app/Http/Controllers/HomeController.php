<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\IndexHint;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home.index");
    }
    public function login(){
        return view("home.login");
    }
    public function single(){
        return view("home.single");
    }
}

