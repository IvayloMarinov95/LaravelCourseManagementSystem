@extends('layouts.master')
@section('content')
<div class="wrap">
    <div class="two" ><br style="clear:both">

      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1467.1953346755436!2d23.354433!3d42.653076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2973b731c3059638!2zTWljcm9zb2Z0IElUINCw0LrQsNC00LXQvNC40Y8g0LrRitC8INCk0LDQk9CY0J7Qn9CcINC_0YDQuCDQotCjLdCh0L7RhNC40Y8!5e0!3m2!1sbg!2sus!4v1516280133228" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
    <div class="one">
       <div col-md-5 img-thumbnail style="padding: 0px;">
          <div id="feedback"> <div class="container">
            <div class="col-md-5">
                <div class="form-area">  
                    <form role="form" action="{{route('message-sent')}}" method="post">
                    @csrf
                    <br style="clear:both">
                                <h1 style="margin-bottom: 60px; text-align: left;">{{__('Contacts')}}</h3>
                          <div class="form-group">
                        <input type="text" class="form-control" style="width: 250px;" id="name" name="name" placeholder="{{__('Name')}}" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" style="width: 250px;" id="phone" name="phone" placeholder="{{_('Phone')}}" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" style="width: 350px;" id="email" name="email" placeholder="{{__('Email')}}" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" style="width: 350px;" id="subject" name="subject" placeholder="{{__('About')}}" required>
                      </div>
                                <div class="form-group">
                                <textarea class="form-control" type="textarea" name="body" id="body" placeholder="{{__('Message')}}" maxlength="500" rows="12"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block ">Limit: 500 symbols</p></span>                    
                                </div>
                        
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">{{__('Send')}}</button>
                    </form>
                </div>
            </div>
        </div> 
      </div>
    </div>
  </div>
</div>    
@endsection