<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\interfaces\Iarticles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    private $_article;
    public function __construct(Iarticles $article)
    {
        $this->_article=$article;
    }
    public function store(StoreArticleRequest $request)
    {
        $this->_article->store($request);
        return redirect(route('dashboard'))->with('success','Article Created Successfuly');
    }
}
