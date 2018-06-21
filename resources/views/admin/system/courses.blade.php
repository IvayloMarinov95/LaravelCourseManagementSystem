@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('css/categories.css') }}" type="text/css"/>
@endsection

@section('content')
    <div class="container">
        <section id="category-admin">
            <form method="post" action="{{ route('admin.system.course.create') }}">
            @csrf
                <div class="input-group">
                    <label for="name">Course name</label>
                    <input type="text" name="name" id="name"/>
                    <button type="submit" class="btn">Create Course</button>
                </div>
            </form>
        </section>
        <section class="list">
            @foreach($courses as $course)
                <article>
                    <div class="category-info" data-id="{{ $course->id }}">
                        <h3>{{ $course->name }}</h3>
                    </div>
                    <div class="edit">
                        <nav>
                            <ul>
                                <li class="category-edit"><input type="text"/></li>
                                <li><a href="{{ route('admin.system.course.edit', ['course_id' => $course->id]) }}">Edit</a></li>
                                <li><a href="{{ route('admin.system.course.delete', ['course_id' => $course->id]) }}" class="danger">Delete</a></li>
                            </ul>
                        </nav>
                    </div>
                </article>
            @endforeach
        </section>
    </div>
@endsection

{{--@section('scripts')
    <script type="text/javascript">
        var token = "{{Session::token()}}";
    </script>
    <script type="text/javascript" src="{{ URL::to('js/categories.js') }}"></script>
@endsection--}}