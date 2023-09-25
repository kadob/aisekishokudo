<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Location;
use App\Models\User;

class PostController extends Controller
{
    public function showList(Post $post)
    {
        return view('posts/postlist')->with(['posts' => $post->getPaginateByLimit()]);   
    }
    
    public function createPost(Location $location)
    {
        $user_id = auth()->id();
        return view('posts/postform',['locations' => $location->get(),'user_id' => $user_id]);
    }
    
    public function store(Post $post, PostRequest $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts');
    }
    
    public function edit(Post $post)
    {
        $locations = Location::all();
        return view('posts.editpost',compact('post','locations'));
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts');
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}