<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Request $request, Post $post) {
        
        $comment = $request->validate([
            'comment' => 'required'
        ]);

        $comment['user_id'] = auth()->id();

        $post->comments()->create($comment);

        return back();
    }
}
