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
                                    <h1 style="margin-bottom: 60px; text-align: left;">Вход</h3>
                                    <div class="form-group">
                                        <input type="email" class="form-control" style="width: 250px;" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" style="width: 250px;" id="password" name="password" placeholder="Парола" required>
                                    </div>       
                        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Вход</button>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>   
@endsection
