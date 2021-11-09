<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function about(){
        return view('Pages/about');
    }

    public function contact(){
        return view('Pages/contact');
    }

    public function myInfo(){
        return view('Pages/myinfo');
    }
    public function video(){
        return view('Pages/video');
    }
    public function gallery(){
        return view('Pages/gallery');
    }
}
