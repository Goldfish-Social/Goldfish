<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['caption', 'visibility', 'user_id', 'media', 'nsfw', 'tags', 'title'];

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
        return $this->belongsTo(User::class, 'user_id');
    }
    // Relation to likes
    public function likes() {
        return $this->hasMany(Like::class, 'user_id');
    }
}
