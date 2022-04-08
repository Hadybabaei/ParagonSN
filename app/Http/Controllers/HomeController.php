<?php

namespace App\Http\Controllers;

use App\interfaces\Iarticles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // private $_article;
    // public function __construct(Iarticles $article)
    // {
    //     $this->_article=$article;
    // }
    public function index()
    {
        return view('index');
    }
    public function dashboard()
    {
        if (Auth::user())
        {
           $datas=Auth::user()->Article;
           return view('dashboard',compact('datas'));
        }else{
            redirect(route('home'));
        }
    }
}
