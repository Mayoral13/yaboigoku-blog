<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Replies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    } ////////////////////INDEX,ALLPOST,GETPOST,REDIRECT

    public function search_post(Request $req){
        $search = $req->search;
        $posts = Post::where('category','LIKE',"%$search%")->orWhere('title','LIKE',"%$search%")->orWhere('username','LIKE',"%$search%")->paginate();
        return view('home.all_posts',compact('posts'));
    }
    public function loggedIN(){
        if(Auth::id()){
            $posts = Post::paginate(2);
            return view('home.home',compact('posts'));
        }else{
            return redirect('register');
        }
    }
    public function all_posts(){
        $posts = Post::paginate(4);
        return view('home.all_posts',compact('posts'));
    }
    public function get_post($id){
        $post = Post::find($id);
        $comments = Comment::find($id)->where('post_id','=',$id)->paginate(5);
        $comment_count = Comment::with('comments')->where('post_id','=',$id)->count();
        $posts = Post::paginate(3);
        return view('home.get_post',compact('post','posts','comments','comment_count'));
    }

    
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function create(){
        return view('home.create_post');
    }

    public function comment(Request $req){
        $comment = new Comment;
        $user = Auth::user();
        $comment->username = $user->name;
        $comment->comment = $req->comment;
        $comment->post_id = $req->postid;

        $comment->save();
        return redirect()->back();
        

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
            return redirect('register');
        }
    }
}

