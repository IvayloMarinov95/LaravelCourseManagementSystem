@extends('layouts.master')
@section('content')
<div class="wrap">
    <div col-md-5 img-thumbnail style= padding:0px;>
        <div id="feedback">
            <div class="container">
                <div class="col-md-5">
                    <div class="form-area">  
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                        <br style="clear:both">
                                    <h1 style="margin-bottom: 60px; text-align: left;">{{__('Login')}}</h3>
                                    <div class="form-group">
                                        <input type="email" class="form-control" style="width: 250px;" id="email" name="email" placeholder="{{__('Email')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" style="width: 250px;" id="password" name="password" placeholder="{{__('Password')}}" required>
                                    </div>       
                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">{{__('Login')}}</button>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>   
@endsection
