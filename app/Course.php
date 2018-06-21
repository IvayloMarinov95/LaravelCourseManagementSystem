<?php

namespace App;
use App\CourseWork;
use App\Lecture;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function courseworks(){
        return $this->hasMany('App\CourseWork');
    }

    public function lectures(){
        return $this->hasMany('App\Lecture');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
