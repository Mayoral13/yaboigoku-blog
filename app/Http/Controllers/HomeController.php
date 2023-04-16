<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Query\IndexHint;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::paginate(2);
            return view('home.home',compact('posts'));
    }
    public function login(){
        return redirect("login");
    }
    public function single(){
        return view("home.single");
    }
    public function loggedIN(){
        if(Auth::id()){
            $posts = Post::paginate(2);
            return view('home.home',compact('posts'));
        }
    }
    public function all_posts(){
        $posts = Post::paginate(4);
        return view('home.all_posts',compact('posts'));
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function create(){
        return view('home.create_post');
    }

    public function create_post(Request $req){
        if(Auth::id()){
            $user = Auth::user();
            $username = $user->name;
             $post = new Post;
             $post->username = $username;
             $post->title =$req->title;
             $post->category =$req->category;
             $post->post =$req->post;

             $image = $req->image;
             $imagename = time().'.'.$image->getClientOriginalExtension();
             $req->image->move('product',$imagename);
             $post->image = $imagename;

             $post->save();
             return redirect('/redirect');
        }else{
            return redirect('login');
        }
    }
}

