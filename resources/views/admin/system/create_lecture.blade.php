@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/form.css') }}" type="text/css"/>
@endsection

@section('content')
    <div class="container">
        @include('includes.info-box')
        <form  method="post" action = "{{route('admin.system.lecture.create')}}" enctype="multipart/form-data">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" {{ $errors->has('name') ? 'class=has-error' : '' }} value="{{ Request::old('name') }}"/>
            </div>
            <div class="input-group">
                <label for="course">Course</label>
                <select name="course" id="course">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{$course->name }}</option>
                    @endforeach
                </select>
                <input type="hidden" name="courses" id="courses">
            </div>
            <div class="file">
                Browse: <input type="file" id="file" name="file" multiple>
            </div>
            <br>
            <button type="submit" class="btn">Create Lecture</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}" />
        </form>
    </div>
@endsection

{{--@section('scripts')
    <script type="text/javascript" src="{{ URL::to('js/posts.js') }}"></script>
@endsection--}}