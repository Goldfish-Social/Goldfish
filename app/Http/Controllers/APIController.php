<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class APIController extends Controller
{
    // Start with API v1
    public function index(Request $request)
    {
        return PostResource::collection(Post::query()
        ->with('user', 'replies', 'likers')
        ->latest()
        ->where('status', 'Public')
        ->where('is_nsfw', null)
        ->when($request->input('search'), function ($query, $search) {
            $query->where('description', 'like', "%{$search}%");
        })
        ->paginate(5)
        ->withQueryString());
    }
}
