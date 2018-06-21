@extends('layouts.master')
@section('content')
@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert alert-danget">{{$error}}</div>
  @endforeach
@endif
<div class="wrap">
  <div col-md-5 img-thumbnail style="padding: 0px;">
    <div id="feedback"> <div class="container">
      <div class="col-md-5">
          <div class="form-area">  
              <form action="{{ route('register')}}" method="post">
              @csrf
              <br style="clear:both">
                          <h1 style="margin-bottom: 60px; text-align: left;">Регистрация</h3>
                    <div class="form-group">
                  <input type="text" class="form-control" style="width: 250px;" id="name" name="name" placeholder="Име"  {{ $errors->has('name') ? 'class=has-error' : '' }} value="{{ Request::old('name') }}">
                </div>
                          <div class="form-group">
                  <input type="text" class="form-control" style="width: 250px;" id="lastname" name="lastname" placeholder="Фамилия"  {{ $errors->has('lastname') ? 'class=has-error' : '' }} value="{{ Request::old('lastname') }}">
                </div>
                          <div class="form-group">
                  <input type="text" class="form-control" style="width: 250px;" id="email" name="email" placeholder="Email" {{ $errors->has('email') ? 'class=has-error' : '' }} value="{{ Request::old('email') }}">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" style="width: 250px;" id="password" name="password" placeholder="Парола">
                </div> 
                <div class="form-group">
                  <input type="password" class="form-control" style="width: 250px;" name="password_confirmation" placeholder="Потвърди паролата">
                </div>         
              <button type="submit" id="btn" class="btn btn-primary pull-right">Регистрация</button>
              </form>
          </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>    
@endsection