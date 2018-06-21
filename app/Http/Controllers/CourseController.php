<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function getCourseIndex(){
        $courses = Course::orderBy('created_at', 'desc')->get();
        return view('admin.system.courses', ['courses' => $courses]);
    }

    public function postCreateCourse(Request $request){
        $this->validate($request,[
            'name' => 'required|unique:courses'
        ]);

        $course = new Course();
        $course->name = $request['name'];
        $course->user_id = Auth::user()->id;
        $course->save();
        return redirect()->back();
    }

    public function getUpdateCourse($course_id){
        $course = Course::find($course_id);
        return view('admin.system.edit_course', ['course' => $course]);
    }

    public function postUpdateCourse(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:courses'
        ]);
        $course = Course::find($request['course_id']);
        $course->name = $request['name'];
        $course->update();
        return redirect()->route('admin.system.courses');
    }

    public function getDeleteCourse($course_id){
        $course = Course::find($course_id);
        $course->delete();
        return redirect()->back();
    }
}
