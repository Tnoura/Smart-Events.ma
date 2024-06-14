<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SmartController extends Controller
{
    public function home(){
        $posts = Post::orderBy('created_at' ,'desc')
        ->whereStatus('PUBLISHED')
        ->take(4)
        ->get();
        return view('Principal.home', ['myposts' => $posts]);
    }

    public function about(){
        return view("Principal.about");
    }
    public function salons(){
        return view("Principal.salons");
    }
    public function gallery(){
        return view("Principal.gallery");
    }
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('Principal.show', ['post' => $post]);
    }
 
}
