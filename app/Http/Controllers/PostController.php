<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function updatePost(Post $post, Request $request){
        if(auth()->user()->id !== $post['user_id']){
            return redirect('/home');
        }

        $incomingFields = $request->validate([
            'title' =>'required',
            'body' =>'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);

        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/dashboard');
    }

    public function showEdit(Post $post){
        if(auth()->user()->id !== $post['user_id']){
            return redirect('/home');
        }
        return view('edit-post', ['post' => $post]);
    }

    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title' =>'required',
            'body' =>'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);

        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $incomingFields['user_id'] = auth()->id();

        Post::create($incomingFields);

        return redirect('dashboard');
    }
}
