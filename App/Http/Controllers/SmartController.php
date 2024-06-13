<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmartController extends Controller
{
    public function home(){
        return view("Principal.home");
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
    public function show(){
        return view("Principal.show");
    }
 
}
