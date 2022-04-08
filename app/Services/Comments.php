<?php 
namespace App\Services;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait Comments
{
    public function store(Request $request,$id)
    {
        return Comment::create([
            'body'=>$request->body,
            'article_id'=>$id,
            'user_id'=>Auth::user()->id,
        ]);
    }
}