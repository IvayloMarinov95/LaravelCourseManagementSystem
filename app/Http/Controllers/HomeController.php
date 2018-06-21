<?php

namespace App\Http\Controllers;
use App\Post;
use App\Course;
use App\Lecture;
use App\CourseWork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }

    public function getRegister()
    {
        return view('registration');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function getUserContact()
    {
        return view('user-contact');
    }

    public function getAdminIndex(){
        $lectures = Lecture::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.index', ['lectures' => $lectures, 'posts' => $posts]);
    }

    public function getHomePage(){
        $courses = Course::all();
        $posts = Post::latest()->limit(4)->get();
        return view('homepage', ['courses' => $courses, 'posts'=>$posts]);
    }

    public function getCourses(){
        $courses = Course::all();
        return view('courses', ['courses' => $courses]);
    }

    public function getCourseSingle($course_id){
        $course =  Course::find($course_id);    
        return view('course-single', ['course' => $course]);
    }

    public function getPosts(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts', ['posts'=>$posts]);
    }

    public function postCourseWork(Request $request, $course_id){
        $coursework = new Coursework();
        $coursework->document_name = $request->file->getClientOriginalName();
        // $lecture->document_path = config('app.lectures-folder') . str_random();
        $coursework->course_id = $course_id;
        if($request->hasFile('file')){
        $file = $request->file('file');
        $coursework->document_path = $file->store('public/upload/courseworks');
        } else{
             return redirect()->back();
        }
        $coursework->save();
        return redirect()->route('course-single',['course_id' => $course_id]);
    }


}
