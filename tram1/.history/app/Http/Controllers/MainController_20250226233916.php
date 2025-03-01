<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
        return view('main.pages.welcome');
    }

    public function videos()
    {
        return view('main.pages.videos');
    }

    public function news()
    {
        return view('main.pages.news');
    }

    public function about()
    {
        return view('main.pages.about');
    }

    public function contact()
    {
        return view('main.pages.contact');
    }

    public function video_play()
    {
        return view('main.pages.videos_play');
    }

    public function login()
    {
        return view('main.pages.login');
    }
}


