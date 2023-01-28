<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('guest.home');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
