<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\Follower;
use Overtrue\LaravelFollow\Traits\Followable;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['caption', 'visibility', 'user_id', 'media', 'nsfw', 'tags', 'title'];

    protected $with = ['user', 'likes'];

    public function scopeFilter($query, array $filters) {
        if($filter['tags'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filter['search'] ?? false) {
            $query->where('caption', 'like', '%' . request('search') . '%')
                ->orWhere('user_id', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relation to User
    public function user() {
        return $this->belongsTo(User::class);
    }
    // Relation to likes
    public function likes() {
        return $this->hasMany(Like::class, 'post_id');
    }
}
