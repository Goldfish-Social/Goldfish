<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function public(Request $request)
    {
        return Inertia::render('Timeline/Public', [
            'posts' =>  PostResource::collection(Post::query()
            ->with('user', 'replies', 'likers')
            ->latest()
            ->where('status', 'Public')
            ->where('is_nsfw', null)
            ->when($request->input('search'), function ($query, $search) {
                $query->where('description', 'like', "%{$search}%");
            })
            ->paginate(20)
            ->withQueryString()),
            'filters'           =>  $request->only(['search']),
            'postcount'         =>  Post::latest()->count(),
        ]);
    }

    public function home(Request $request)
    {
        return Inertia::render('Timeline/Home', [
            'posts' => PostResource::collection(Post::where(function ($query)
            {
                $query->where('user_id', auth()->id())
                ->orWhereIn('user_id', auth()->user()->followings->pluck('followable_id'));
            })
            ->with('user', 'replies', 'likers')
            ->latest()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('description', 'like', "%{$search}%");
            })
            ->paginate(20)
            ->withQueryString()),
            'filters'           =>  $request->only(['search']),
            'postcount'         =>  Post::latest()->count(),
            
        ]);
    }
}
