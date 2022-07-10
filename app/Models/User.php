<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Hypefactors\Laravel\Follow\Traits\CanFollow;
use Hypefactors\Laravel\Follow\Contracts\CanFollowContract;
use Hypefactors\Laravel\Follow\Traits\CanBeFollowed;
use Hypefactors\Laravel\Follow\Contracts\CanBeFollowedContract;

class User extends Authenticatable implements MustVerifyEmail, CanFollowContract, CanBeFollowedContract
{
    use HasApiTokens, HasFactory, Notifiable, CanFollow, CanBeFollowed;

    // Also load default related tabled
    //protected $with = ['posts', 'comments'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
        'header_bg',
        'bio',
        'website',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relation to Post
    public function posts() {
        return $this->hasMany(Post::class);
    }
    // Relation to likes
    public function likes() {
        return $this->hasMany(Like::class, 'user_id');
    }
    public function getPostsCountAttribute(){
        return $this->posts()->count();
    }
}
