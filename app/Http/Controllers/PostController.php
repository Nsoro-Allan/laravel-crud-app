<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title' =>'required',
            'body' =>'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);

        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $incomingFields['user_id'] = auth()->id();

        Post::create($incomingFields);

        return redirect('/dashboard');
    }
}
