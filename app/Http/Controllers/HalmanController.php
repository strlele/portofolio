<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalmanController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function hoby()
    {
        return view('hoby');
    }
    public function contact()
    {
        return view('contact');
    }

}
