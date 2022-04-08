<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\interfaces\Icomments;

class CommentsController extends Controller
{
    private $_comments;
    public function __construct(Icomments $comments)
    {
        $this->_comments=$comments;
    }
    public function store(Request $request,$id)
    {
        $this->_comments->store($request,$id);
        return redirect(route('dashboard'));
    }
}
