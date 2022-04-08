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