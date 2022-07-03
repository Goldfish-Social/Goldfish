<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['caption', 'visibility', 'user_id', 'media'];

    public function scopeFilter($query, array $filters) {
        if($filter['tags'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filter['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
