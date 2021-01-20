<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function home()
    {
        Session::put('activeNav', 'home');

        // Session::flash('alertMessage', 'Success submited with session');

        return view("welcome");
    }

    public function about()
    {
        Session::put('activeNav', 'about');
        return view('about', ['name' => 'Amar Khoirudin']);
    }

    public function aboutSubmit()
    {
        Session::flash('alertMessage', 'Clicked from About');

        return redirect('/');
    }
}
