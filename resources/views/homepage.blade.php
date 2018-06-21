@extends('layouts.user-master')

@section('styles')
    <link rel = "stylesheet" href="{{URL::to('css/modal.css')}}" type="text/css"/>
@endsection

@section('content')
<div>
    @include('includes.info-box')
    <div class="card card-holder">
        <header>
            <nav>
                <ul>
                    <li><a href="{{route('courses')}}" class="btn">Покажи всички курсове</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <ul>
                @foreach($courses as $course)
                    <li>
                        <article>
                            <div class="post-info">
                                <h3><b><a href="{{route('course-single', ['id' => $course->id])}}">{{ $course->name }}</a></b></h3>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul> 
        </section>
    </div>
    <div class="card card-holder">
        <header>
            <nav>
                <ul>
                    <li><a href="{{route('posts')}}" class="btn">Виж всички публикации</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <ul>
                @if(count($posts)==0)
                    <li>No Messages</li>
                @endif
                @foreach($posts as $post)
                    <li>
                        <article data-message="{{ $post->body }}" data-id="{{ $post->id }}">
                            <div class="message-info">
                                <h3><b>{{ $post->name }}</b></h3>
                                <div>{{$post->body}}</div>
                                <br>
                                
                            </div>
                            <div class="edit">
                                <ul>
                                    <span class="info">{{ $post->created_at }}</span>
                                </ul>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
    <div class="modal" id="contact-message-info">
        <button class="btn" id="modal-close">Close</button>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var token = "{{ Session::token() }}";
    </script>
    <script type="text/javascript" src="{{ URL::to('js/modal.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/contact_messages.js') }}"></script>
@endsection