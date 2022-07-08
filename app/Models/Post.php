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
        // Check if query 'search' is ran
        $query->when($filters['search'] ?? false, function($query, $search) {
            $query
            ->where('caption', 'like', '%' . $search . '%');
        });
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
