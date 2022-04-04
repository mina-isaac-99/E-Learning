@extends('layouts.app')

@section('content')
<h2 class="text-center">Edit Account</h2>
<form class="my-4" action="{{route('updatename')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="{{Auth::user()->name}}"  class="form-control  mb-3" id="exampleInputEmail1" aria-describedby="emailHelp">
    <button class="btn btn-success" type="submit">Update Name</button>
</div>
</form>
@endsection
