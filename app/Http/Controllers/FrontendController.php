<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

    public function postCategory($slug){
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts;
        return view('frontend.welcome', compact('posts'));
    }

    public function postTag($slug){
        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts;
        return view('frontend.welcome', compact('posts'));

    }
}
