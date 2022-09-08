<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'             =>  $this->id,
            'name'           =>  Str::limit($this->name, 16),
            'about'          =>  $this->about,
            'pic'            =>  $this->getProfilePhotoUrlAttribute(),
            'time'           =>  $this->created_at->diffForHumans(),
            'username'       =>  $this->username,
            'website'        =>  Str::limit($this->website, 32),
            'link'           =>  $this->website,
            'postamount'     =>  $this->posts->count(),
            'followerscount' =>  $this->followers()->count(),
            'followcount'    =>  $this->followings()->count(),
            'isFollowing'    =>  Auth::user() ? Auth::user()->isFollowing($this->resource) : null,
            'isFollowedBy'   =>  Auth::user() ? Auth::user()->isFollowedBy($this->resource) : null,
            'followbutton'   =>  Auth::user() ? Auth::user()->is($this->resource) : null,
            //'posts'          =>  PostResource::collection($this->whenLoaded('posts')),
        ];
    }
}
