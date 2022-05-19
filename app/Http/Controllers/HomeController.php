<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       return view('layouts.frontbase');
    }

    public function homefonksiyonum(){
        return view('home.index');
    }

    public function services(){
        return view('home.servivePage');
    }

    public function about(){
        return view('home.about');
    }
}
