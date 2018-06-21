<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function getPostIndex(){
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.system.posts', ['posts' => $posts]);
    }

    public function getUpdatePost($post_id){
        $post = Post::find($post_id);
        return view('admin.system.edit_post', ['post' => $post]);
    }

    public function getCreatePost(){
        return view('admin.system.create_post');
    }

    public function postCreatePost(Request $request){
        $this->validate($request,[
            'name' => 'required|max:120|unique:posts',
            'body' => 'required'
        ]);

        $post = new Post();
        $post->name = $request['name'];
        $post->body = $request['body'];
        $post->save();

        return redirect()->route('admin.system.posts')->with(['success' => 'Post successfully created!']);
    }

    public function postUpdatePost(Request $request){
        $this->validate($request,[
            'name' => 'required|max:120',
            'body' => 'required' 
        ]);
        $post = Post::find($request['post_id']);
        $post->name= $request['name'];
        $post->body = $request['body'];
        $post->update();
        return redirect()->route('admin.system.posts')->with(['success' => 'Post successfully updated!']);
    }

    public function getDeletePost($post_id){
        $post = Post::find($post_id);
        if(!$post){
            return redirect()->route('blog.index')->with(['fail' => 'Post not found!']);
        }
        $post->delete();
        return redirect()->route('admin.system.posts')->with(['success' => 'Post successfully deleted!']);
    }
}
