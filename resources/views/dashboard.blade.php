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
            <div class="user-info">
                <div class="user-prof">
                <img src={{$article->user->avatar}} alt="prof">
                </div>
                <h6>{{$article->user->name}}</h6>
            </div>
            <div class="post-img">
                <img id="art-img" src={{$article->image}} >
            </div>
            <div class="post-options">
                <a href={{route('like',$article->id)}}>
                    <img id="like" src="/images/toppng.com-heart-icon-transparent-icon-symbol-love-black-729x669.png" width="20" height="20">
                </a>
                <small>{{$article->likes}}</small>
            </div>
            <div class="post-caption">
                <h6>{{$article->user->name}}:</h6>
                <p> {{$article->caption}}</p>
            </div>
            <div class="comments">
                <div class="commented">
                    <small>view all {{count($article->Comment)}} comments .. </small>
                    @foreach ($article->Comment as $comment)
                        <p>{{$comment->User->name}}: {{$comment->body}}</p>
                    @endforeach
                </div>
                <form action={{route('comment-store',$article->id)}} method="POST">
                    @csrf
                <textarea class="form-control" style="resize: none" name="body" placeholder="submit comments .."></textarea>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    <div class="side-right">
        @include('modals.newpost')
    </div>
</div>
@endsection