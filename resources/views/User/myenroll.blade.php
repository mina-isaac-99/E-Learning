@extends('layouts.app')
@section('content')

<div class="row">
    <h2 class="text-center mb-4">My Enrollment</h2>
@foreach(Auth::user()->enrollments as $enroll)
    @forelse($courses as $course)
        @if($course->id==$enroll->course_id)
        <div class="col-md-3">
            <div class="card">
                <img width="90%" height="150px" src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" class="card-img-top" alt="...">
                <p class="card-title m-2"> Name : {{$course->name}}</p>
                <p class="card-text m-2"> Desc : {{$course->desc}}</p>
                <p class="card-text m-2"> Duraton : {{$course->duration}} Hour<p>
                <a href="{{route('unenroll',$enroll->id)}}" class="btn btn-danger d-block mx-2"><i class="far fa-times"></i> Un Enroll</a>
            </div>
        </div>
        @endif
        @empty
        <div class="alert alert-danger mt-5"><i class="far fa-exclamation-circle"></i> You Dont added Courses Yet </div>
        @endforelse
    @endforeach
</div>
@endsection
