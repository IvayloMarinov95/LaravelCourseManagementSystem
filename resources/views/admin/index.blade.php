@extends('layouts.admin-master')

@section('styles')
    <link rel = "stylesheet" href="{{URL::to('css/modal.css')}}" type="text/css"/>
@endsection

@section('content')
    <div>
        @include('includes.info-box')
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="{{ route('admin.system.create_lecture') }}" class="btn">New Lecture</a></li>
                        <li><a href="{{ route('admin.system.index') }}" class="btn">Show all Lectures</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <ul>
                    @foreach($lectures as $lecture)
                        <li>
                            <article>
                                <div class="post-info">
                                    <h3>{{ $lecture->name }}</h3>
                                    <span class="info">{{ $lecture->created_at }}</span>
                                </div>
                                <div class="edit">
                                    <ul>
                                        <li><a href="{{ route('admin.system.single', ['lecture_id' => $lecture->id]) }}">View Lecture</a></li>
                                        <li><a href="{{ route('admin.system.lecture.edit', ['lecture_id' => $lecture->id]) }}">Edit</a></li>
                                        <li><a href="{{ route('admin.system.lecture.delete', ['lecture_id' => $lecture->id]) }}" class="danger">Delete</a></li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul> 
            </section>
        </div>
        <div class="card">
            <header>
                <nav>
                    <ul>
                        <li><a href="" class="btn">Show all Posts</a></li>
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
                                    <h3>{{ $post->name }}</h3>
                                    <span class="info">{{ $post->created_at }}</span>
                                </div>
                                <div class="edit">
                                    <ul>
                                        <li><a href="">View</a></li>
                                        <li><a href="" class="danger">Delete</a></li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </div>
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