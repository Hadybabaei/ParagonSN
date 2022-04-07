@extends('layouts.master')
@section('contents')
@if(Auth::user())
    <form method="POST" action={{route('logout')}}>
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
@endif
@includeWhen(!Auth::user(), 'layouts.login')
@includeWhen(!Auth::user(), 'layouts.register')

@endsection