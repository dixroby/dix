<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function about(){
        $alumnos=["ana","sara","Antonio", "manuel"];
        return view('about',compact("alumnos"));
    }
    public function contact(){
        return view('contact');
    }
    public function forum(){
        return view('forum');
    }
}
