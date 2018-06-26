@extends('layouts.user-master')
@section('content')
<br>
<div>
    <div class="panel panel-primary panel-holder">
        <div class="panel-heading">{{__('Courses')}}</div>
        @foreach($courses as $course)
        <div class="panel-body"><a href="{{route('course-single', ['id' => $course->id])}}">{{$course->name}}</a></div>
        @endforeach
    </div>
</div>
@endsection