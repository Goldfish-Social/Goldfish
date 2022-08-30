<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                =>  $this->id,
            'description'       =>  $this->description,
            'avatar'            =>  $this->user->getProfilePhotoUrlAttribute(),
            'time'              =>  $this->created_at->diffForHumans(),
            'username'          =>  $this->user->username,
            'downloadready'     =>  $this->converted_for_downloading_at,
            'hlsready'          =>  $this->converted_for_streaming_at,
            'video'             =>  Storage::disk('public')->url('uploads/' . $this->user->id . '/' . 'videos/' . $this->id . '.mp4'),
            'hls'               =>  Storage::disk('public')->url('uploads/' . $this->user->id . '/' . 'videos/' . $this->id . '.m3u8'),
            'status'            =>  $this->status,
            'isliked'           =>  Auth::user() ? $this->isLikedBy(Auth::user()) : null,
            'delete'            =>  Auth::user() ? Auth::user()->can('delete-post', $this->resource) : null,
            'replycount'        =>  $this->replies->count(),
            'likes'             =>  $this->likers()->count(),
            'replies'           =>  ReplyResource::collection($this->replies)
        ];
    }
}
