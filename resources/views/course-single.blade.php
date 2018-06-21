@extends('layouts.user-master')
@section('content')
<br>
<div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-primary panel1-holder">
                    <div class="panel-heading">Лекции</div>
                    @foreach($course->lectures as $lecture)
                    <div class="panel-body"><a href="{{ $lecture->document }}">{{$lecture->name}}</a></div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-primary panel1-holder">
                    <div class="panel-heading">
                    <form action="{{route('post-coursework', ['course_id' => $course->id])}}" method = "post" enctype="multipart/form-data">
                    @csrf
                        <span>Курсови работи&nbsp;|&nbsp;</span><input type="file" id="file" name="file" multiple>
                        <div class="submit-holder clearfix">
                            <input type="submit" value="Добави">
                        </div>
                    </form>
                    </div>
                    @foreach($course->courseworks as $coursework)
                    <div class="panel-body"><a href="{{ $coursework->document }}">{{$coursework->document_name}}</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection