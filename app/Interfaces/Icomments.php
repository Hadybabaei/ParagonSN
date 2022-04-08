<?php 
namespace App\interfaces;

use Illuminate\Http\Request;

interface Icomments
{
    public function store(Request $request,$id);
}