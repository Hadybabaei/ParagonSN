@extends('layouts.master')
@section('contents')
@if($errors->any())
<div class="alert alert-danger" style="text-align: center">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div> 
@endif

@if(session('success'))
    <div style="text-align: center" class="alert alert-success">
        {{session('success')}}
    </div>
@endif
<form method="POST" action={{route('logout')}}>
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
@include('modals.newpost')
