@extends('layouts.admin-master')

@section('styles')
    <link rel="stylesheet" href="{{ URL::to('css/form.css') }}" type="text/css"/>
@endsection

@section('content')
    <div class="container">
        @include('includes.info-box')
        <form  method="post" action = "{{route('admin.system.post.create')}}">
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" {{ $errors->has('name') ? 'class=has-error' : '' }} value="{{ Request::old('name') }}"/>
            </div>
            <div class="input-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" rows="12" {{ $errors->has('body') ? 'class=has-error' : '' }} >{{ Request::old('body') }}</textarea>
            </div>
            <button type="submit" class="btn">Create Post</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}" />
        </form>
    </div>
@endsection