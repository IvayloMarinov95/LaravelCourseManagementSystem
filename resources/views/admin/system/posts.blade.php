@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/form.css') }}" type="text/css"/>
@endsection

@section('content')
    <div class = "container">
        @include('includes.info-box')
        <section id="post-admin">
            <a href="{{ route('admin.system.create_post') }}" class="btn">New Post</a>
        </section>
    </div>
    <section class="list">
    @foreach($posts as $post)
        <article>
        <div class="post-info">
            <h3><b>{{$post->name}}</b></h3>
            <div>{{$post->body}}</div>
           <br>
        </div>
        <div class="edit">
            <nav>
                <ul>
                    <li><a href="{{ route('admin.system.post.edit', ['post_id' => $post->id]) }}">Edit</a></li>
                    <li><a href="{{ route('admin.system.post.delete', ['post_id' => $post->id]) }}" class="danger">Delete</a></li>
                    <li> <span class="info"> | {{$post->created_at}}</span></li>
                </ul>
            </nav>
        </div>
    </article>
    @endforeach
    </section>
        </div>
@endsection