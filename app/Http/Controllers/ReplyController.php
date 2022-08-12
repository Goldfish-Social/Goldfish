<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ReplyController extends Controller
{
    public function store(Request $request, Post $post) {
        
        $reply = $request->validate([
            'reply' => 'required|max:500|min:1'
        ]);

        $reply['post_id'] = $request['post_id'];

        $reply['user_id'] = auth()->id();

        $post->replies()->create($reply);

        return back();
    }
    // Delete
    public function destroy(Reply $reply)
    {
        if (! Gate::allows('delete-reply', $reply)) {
            abort(403);
        }
        $reply->delete();
    
        return back();
    }
}
