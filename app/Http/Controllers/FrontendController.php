<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $posts = Post::active()->get();
        return view('frontend.welcome', compact('posts'));
    }

    public function showPost($slug){
        $post = Post::where('slug', $slug)->first();
        return view('frontend.show', compact('post'));
    }
}
