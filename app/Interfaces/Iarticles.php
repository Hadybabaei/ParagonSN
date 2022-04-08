<?php
namespace App\interfaces;

use App\Http\Requests\StoreArticleRequest;

interface Iarticles 
{
    public function get();
    public function dashGet();
    public function store(StoreArticleRequest $request);
    public function like($id);
    // public function edit($id);
    // public function delete($id);
}