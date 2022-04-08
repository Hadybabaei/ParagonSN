@extends('layouts.master')
@section('contents')
@include('layouts.header')
<div class="main">
    <div class="side-left">
        <form method="POST" action={{route('logout')}}>
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
    <div class="Middle">
        @foreach ($datas as $article)
        <div class="posts">
            <div class="post-img">
                <img id="art-img" src={{$article->image}} >
            </div>
            <form id="like-form" action={{route('like',$article->id)}} method="post">
                @csrf
            </form>
            <div class="post-options">
                <img src="/images/toppng.com-heart-icon-transparent-icon-symbol-love-black-729x669.png" width="20" height="20" onclick="likeSubmit()">
            </div>
            <div class="post-caption">
                <h6> {{$article->caption}}</h6>
            </div>
        </div>
        @endforeach
    </div>
    <div class="side-right">
        @include('modals.newpost')
    </div>
</div>
@endsection