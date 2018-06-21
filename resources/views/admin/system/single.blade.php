@extends('layouts.admin-master')

@section('content')
    <div class="container">
        <section id="post-admin">
            <a href="{{ route('admin.system.lecture.edit', ['lecture_id'=> $lecture->id]) }}">Edit Lecture</a>
            <a href="{{ route('admin.system.lecture.delete', ['lecture_id'=> $lecture->id]) }}" class = "danger">Delete</a>
        </section>
        <section class="post">
            <h1>{{$lecture->name}}</h1>
            <span class="info">{{$lecture->document_name}} | {{$lecture->created_at}}</span>
        </section>
    </div>
    @endsection