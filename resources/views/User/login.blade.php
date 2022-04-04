@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
@include('inc.authorerrors')
<h1 class="text-center mb-4 mt-3">Login</h1>
<form class="mt-4" action="{{route('handlelogin')}}" method="post" enctype="multipart/form-data" style="width:35%; margin-left: auto;margin-right: auto;">
    @csrf
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
    <button type="submit" class="btn btn-primary d-block"><i class="fa fa-sign-in"></i> Login </button>
    <br>
    <p class="mb-3">Don't have account , <a style="text-decoration:none;"  href="{{route('register')}}"> Create account</a></p>
</form>
@endsection
