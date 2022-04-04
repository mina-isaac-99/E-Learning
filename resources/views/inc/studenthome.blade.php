
@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
<a href="{{route('myenroll')}}" class="btn btn-primary mb-5"><i class="fa fa-check"></i> Enrolled Courses</a>
</div>
<div class="container-fluid">
    <div class="row">
        <h2 class="text-center mb-5">All Courses</h2>
        @foreach($courses as $course)
        <?php
        $count=0;
        $cont=0;
        ?>
        @foreach(Auth::user()->enrollments as $enroll)
            @if($enroll->course_id==$course->id)
            <?php  ++$cont ?>
            @endif
        @endforeach
        <?php if($cont==$count){?>
            <div class="col-md-3 col-lg-3">
                <div class="card">
                    <img src="https://content.techgig.com/thumb/msid-79998104,width-460,resizemode-4/Want-to-learn-a-programming-language-Follow-this-learning-plan.jpg?77507" class="card-img-top mb-2" alt="...">
                    <h5 class="card-title text-center mb-2">Course :  {{$course->name}}</h5>
                    <a href="{{route('viewcourse',$course->id)}}"  class="btn btn-danger mx-2"><i class="fa fa-eye"></i> Show</a>
                    <a href="{{route('enroll',$course->id)}}"  class="btn btn-success m-2"><i class="fa fa-check"></i> Enroll</a>
                </div>
            </div>
        <?php }?>
        @endforeach
    </div>
</div>
@endsection
