@extends('layouts.app')
@section('title')
Add Course
@endsection
@section('content')
<h4 class="text-center">Add Course</h4>
<form class="my-4" action="{{route('storeCourse')}}" method="post" enctype="multipart/form-data" style="width:40%; margin-left: auto;margin-right: auto;">
    @csrf
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Description</label>
    <input type="text" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Duration (Hour)</label>
    <input type="number" name="duration" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary"><i class="far fa-plus"></i> Add Course</button>
</form>
@endsection
