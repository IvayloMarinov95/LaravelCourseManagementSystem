<?php

namespace App;
use App\Course;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function getDocumentAttribute(){
        return asset('storage/' .str_replace('public/', '',$this->document_path));
    }
}
