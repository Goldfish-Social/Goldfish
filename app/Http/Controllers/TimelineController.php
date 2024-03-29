<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function public(Request $request)
    {
        $posts = PostResource::collection(Post::query()
        ->with('user', 'replies', 'likers')
        ->latest()
        ->where('status', 'Public')
        ->where('is_nsfw', null)
        ->when($request->input('search'), function ($query, $search) {
            $query->where('description', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString());

        if ($request->wantsJson()) {
            return $posts;
        }

        return Inertia::render('Timeline/Public', [
            'posts' =>  $posts,
            'filters'           =>  $request->only(['search']),
        ]);
    }

    public function home(Request $request)
    {
        $posts = PostResource::collection(Post::where(function ($query) {
            $query->where('user_id', auth()->id())
                ->orWhereIn('user_id', auth()->user()->followings->pluck('followable_id'));
        })
            ->with('user', 'replies', 'likers')
            ->latest()
            ->paginate(10)
            ->withQueryString());

        if ($request->wantsJson()) {
            return $posts;
        }

        return Inertia::render('Timeline/Home', [
            'posts'  =>  $posts,
        ]);
    }

    public function welcome(Request $request)
    {
        $posts = PostResource::collection(
            Post::query()
                ->with('replies', 'user')
                ->latest()
                ->where('status', 'Public')
                ->where('is_nsfw', null)
                ->paginate(10)
                ->withQueryString()
        );

        if ($request->wantsJson()) {
            return $posts;
        }

        return Inertia::render('Timeline/Public', [
            'posts' => $posts,
            'filters' => $request->only(['search'])
        ]);
    }
}
