<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function dashboard()
    {
        if (Auth::user())
        {
            return view('dashboard');
        }else{
            redirect(route('home'));
        }
    }
}
