@extends('layouts.app')
@section('content')

<h2 class="text-center">{{$course->name}} Course</h2>
<div class="card my-4">
   <div class="card-body">
     <div class="row">
       <div class="col-md-4">
       <img width="100%" height="210px" src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" class="card-img-top" alt="...">
        </div>
        <div class="col-md-7 offset-md-1">
        <h3 class="card-title mb-3"><b>Course Details: </b></h3>
        <p class="card-title"><b>Course Name: </b>{{$course->name}}</p>
        <p class="card-title"><b>Course Desc: </b>{{$course->desc}}</p>
        <p class="card-title"><b>Full Duration: </b>{{$course->duration}}</p>
        <p class="card-title"><b>Added: </b>{{$course->created_at}}</p>
        <p class="card-title"><b>Added By:  </b>{{$course->user->name}}</p>
      </div>
     </div>
  </div>
</div>

<form class="my-4" action="{{route('addcomment',$course->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <img src="{{asset('asset/images/users/'.Auth::user()->img)}}"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
     <span>{{Auth::user()->name}}</span>
    <div class="form-floating mt-2" >
    <input type="text" class="form-control" name="body">
    </div>
    <button type="submit" class="btn btn-primary mt-4"><i class="fa fa-plus"></i> add comment</button>
</form>

@foreach($course->comments as $comment)
<div class="alert alert-dark">
    @foreach($users as $user)
       @if($user->id == $comment->user_id)
       <img src="{{asset('asset/images/users/'.$user->img)}}"  class="rounded-circle mx-3" width="50px" height="50px" alt="...">
        <b class="mr-4">{{$user->name}}</b>
        <br> <br>
       <span class="mx-5"> Comment: {{$comment->body}}</span>
      @endif
   @endforeach
</div>
@endforeach
@endsection
