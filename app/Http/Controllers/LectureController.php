<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecture;
use App\Course;

class LectureController extends Controller
{
    public function getLectureIndex(){
        $lectures = Lecture::orderBy('created_at','desc')->get();
        return view('admin.system.index', ['lectures'=> $lectures]);
    }

    public function getSingleLecture($lecture_id){
        $lecture = Lecture::find($lecture_id);
        if(!$lecture){
            return redirect()->route('admin.system.index');
        }
        return view('admin.system.single', ['lecture' => $lecture]);
    }

    public function getCreateLecture(){
        $courses = Course::all();
        return view('admin.system.create_lecture', ['courses' => $courses]);
    }
    
    public function postCreateLecture(Request $request){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $lecture = new Lecture();
        $lecture->name = $request['name'];
        $lecture->document_name = $request->file->getClientOriginalName();
        // $lecture->document_path = config('app.lectures-folder') . str_random();
        $lecture->course_id = $request['course'];
        if($request->hasFile('file')){
        $file = $request->file('file');
        $lecture->document_path = $file->store('public/upload/lectures');
        } else{
             return redirect()->back();
        }
        $lecture->save();
        return redirect()->route('admin.system.index');
    }

    public function getUpdateLecture($lecture_id){
        $lecture = Lecture::find($lecture_id);
        return view('admin.system.edit_lecture', ['lecture' => $lecture]);
    }

    public function  postUpdateProduct(Request  $request){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $lecture = Lecture::find($request['lecture_id']);
        $lecture->name = $request['name'];
        $lecture->update();
        return redirect()->route('admin.system.index');
    }

    public function getDeleteLecture($lecture_id){
        $lecture = Lecture::find($lecture_id);
        if(!$lecture){
            return redirect()->route('system.index');
        }
        $lecture->delete();
        return redirect()->route('admin.system.index');
    }

}
