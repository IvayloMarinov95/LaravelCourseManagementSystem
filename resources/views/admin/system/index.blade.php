@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/form.css') }}" type="text/css"/>
@endsection

@section('content')
    @include('includes.info-box')
    <div class = "container">
        @include('includes.info-box')
        <section id="post-admin">
            <a href="{{ route('admin.system.create_lecture') }}" class="btn">New Lecture</a>
        </section>
    </div>
    <section class="list">
                    @foreach($lectures as $lecture)
                            <article>
                                <div class="post-info">
                                    <h3>{{$lecture->name}}</h3>
                                    <span class="info">{{$lecture->document_name}} | {{$lecture->created_at}}</span>
                                </div>
                                <div class="edit">
                                    <nav>
                                        <ul>
                                            <li><a href="{{ route('admin.system.single', ['lecture_id' => $lecture->id]) }}">View Lecture</a></li>
                                            <li><a href="{{ route('admin.system.lecture.edit', ['lecture_id' => $lecture->id]) }}">Edit</a></li>
                                            <li><a href="{{ route('admin.system.lecture.delete', ['lecture_id' => $lecture->id]) }}" class="danger">Delete</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </article>
                    @endforeach
    </section>
        </div>
@endsection