<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Resources\Json\JsonResource;

class FollowResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                =>  $this->followable->id,
            'name'              =>  $this->followable->name,
            'username'          =>  $this->followable->username,
            'about'             =>  $this->followable->about,
            'time'              =>  $this->followable->created_at->diffForHumans(),
            'pic'               =>  $this->followable->getProfilePhotoUrlAttribute(),
            'followerscount'    =>  $this->followable->followers()->count(),
            'followcount'       =>  $this->followable->followings()->count(),
            'postamount'        =>  $this->followable->posts->count(),
            'is'            => [
                'following'     =>  Auth::user() ? Auth::user()->isFollowing($this->followable) : null,
                'self'          =>  Auth::user() ? Auth::user()->is($this->followable) : null
            ]
        ];
    }
}
