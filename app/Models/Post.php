<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelLike\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Likeable;


    // Also load default related tabled
    protected $with = ['user'];

    // Search function
    public function scopeFilter($query, array $filters)
    {
        // Search for status
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
                ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('content', 'like', '%' . $search . '%')
            );
    }

    // Relation to user
    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function replies() 
    {
        return $this->hasMany(Reply::class);
    }
   
}
