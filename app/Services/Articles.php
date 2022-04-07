<?php 
namespace App\Services;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
trait Articles 
{
    public function get()
    {
        return Article::get();
    }
    public function store(StoreArticleRequest $request)
    {
        return 
                Article::create([
                    'title'=>$request->title,
                    'caption'=>$request->title,
                    'image'=>'/images/01fm85cyn0pj7bygrbde.jpg',
                    'user_id'=>Auth::user()->id,
                ]);
    }
}