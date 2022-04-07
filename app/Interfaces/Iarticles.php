<?php
namespace App\interfaces;

use App\Http\Requests\StoreArticleRequest;

interface Iarticles 
{
    public function get();
    public function store(StoreArticleRequest $request);
    // public function edit($id);
    // public function delete($id);
}