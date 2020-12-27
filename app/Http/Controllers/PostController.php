<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class PostController extends Controller
{
   public function index(){
	$users = User::all();
	$posts = Post::all();
	$curuser = auth()->user();

	$postusers=Post::where(['user_id'=>auth()->user()->id])->get();

    return view('wel', compact('users', 'posts','curuser','postusers'));
   
   }

    public function show($id)
    { 
        //$posts=Post::find($id);
        //$curuser = auth()->user();
        $posts = Post::with('author')->find($id);
        return view('single', compact('posts'));
    }

}
