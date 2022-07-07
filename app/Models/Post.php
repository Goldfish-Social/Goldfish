<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['caption', 'visibility', 'user_id', 'media', 'nsfw', 'tags', 'title'];

    protected $with = ['user'];

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query
            ->where('caption', 'like', '%' . request('search') . '%');
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
