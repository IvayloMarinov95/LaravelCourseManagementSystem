@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/form.css') }}" type="text/css"/>
@endsection

@section('content')
    <div class="container">
        @include('includes.info-box')
        <form action="{{ route('admin.system.course.update') }}" method="post">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" {{ $errors->has('name') ? 'class=has-error' : '' }} value="{{ Request::old('name') ? Request::old('name') : isset($course) ? $course->name : '' }}"/>
            </div>
            <button type="submit" class="btn">Save Course</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}" />
            <input type="hidden" name="course_id" value="{{$course->id}}" />
        </form>
    </div>
@endsection