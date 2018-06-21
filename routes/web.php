<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'HomeController@getIndex',
    'as' => 'index'
])->middleware('guest');

Route::get('/registration', [
    'uses' => 'HomeController@getRegister',
    'as' => 'registration'
])->middleware('guest');

Route::get('/contact', [
    'uses' => 'HomeController@getContact',
    'as' => 'contact'
])->middleware('guest');

Route::get('/homepage',[
    'uses' => 'HomeController@getHomePage',
    'as' => 'homepage'
])->middleware('auth');

Route::get('/{course_id}/course-single',[
    'uses' => 'HomeController@getCourseSingle',
    'as' => 'course-single'
])->middleware('auth');

Route::get('/posts',[
    'uses' => 'HomeController@getPosts',
    'as' => 'posts'
])->middleware('auth');

Route::get('/courses',[
    'uses' => 'HomeController@getCourses',
    'as' => 'courses'
])->middleware('auth');

Route::post('/coursework/{course_id}', [
    'uses' => 'HomeController@postCourseWork',
    'as' => 'post-coursework'
])->middleware('auth');

Route::get('/usercontact', [
    'uses' => 'HomeController@getUserContact',
    'as' => 'usercontact'
])->middleware('auth');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'lecturer'
], function(){
   Route::get('/', [
        'uses' => 'HomeController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::get('/system/posts', [
        'uses' => 'PostController@getPostIndex',
        'as' => 'admin.system.posts'
    ]);

    Route::get('/system/posts/create', [
        'uses' => 'PostController@getCreatePost',
        'as' => 'admin.system.create_post'
    ]);

    Route::post('/system/post/create', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'admin.system.post.create'
    ]);

    Route::get('/system/post/{post_id}/edit',[
        'uses' => 'PostController@getUpdatePost',
        'as' => 'admin.system.post.edit'
    ]);

    Route::post('system/post/update',[
        'uses' => 'PostController@postUpdatePost',
        'as' => 'admin.system.post.update'
    ]);

    Route::get('/system/post/{post_id}/delete',[
        'uses' => 'PostController@getDeletePost',
        'as' => 'admin.system.post.delete'
    ]);

    Route::get('/system/lectures', [
        'uses' => 'LectureController@getLectureIndex',
        'as' => 'admin.system.index'
    ]);

    Route::get('/system/courses', [
        'uses' => 'CourseController@getCourseIndex',
        'as' => 'admin.system.courses'
    ]);

    Route::post('/system/courses/create',[
        'uses' => 'CourseController@postCreateCourse',
        'as' => 'admin.system.course.create'
    ]);

    Route::get('/system/lecture/{lecture_id}', [
        'uses' => 'LectureController@getSingleLecture',
        'as' => 'admin.system.single'
    ]);

    Route::get('/system/lectures/create', [
        'uses' => 'LectureController@getCreateLecture',
        'as' => 'admin.system.create_lecture'
    ]);

    Route::post('/system/lecture/create', [
        'uses' => 'LectureController@postCreateLecture',
        'as' => 'admin.system.lecture.create'
    ]);

    Route::get('/system/lecture/{lecture_id}/edit', [
        'uses' => 'LectureController@getUpdateLecture',
        'as' => 'admin.system.lecture.edit'
    ]);

    Route::get('/system/courses/{course_id}/edit', [
        'uses' => 'CourseController@getUpdateCourse',
        'as' => 'admin.system.course.edit'
    ]);

    Route::post('/system/lecture/update',[
        'uses' => 'LectureController@postUpdateLecture',
        'as' => 'admin.system.lecture.update'
    ]);

    Route::post('/system/course/update', [
        'uses' => 'CourseController@postUpdateCourse',
        'as' => 'admin.system.course.update'
    ]);

    Route::get('/system/lecture/{lecture_id}/delete',[
        'uses' => 'LectureController@getDeleteLecture',
        'as' => 'admin.system.lecture.delete'
    ]);

    Route::get('/system/course/{ccourse_id}/delete', [
        'uses' => 'CourseController@getDeleteCourse',
        'as' => 'admin.system.course.delete'
    ]);

    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'admin.logout'
    ]);
});

Auth::routes();
