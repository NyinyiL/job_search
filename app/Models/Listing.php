<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // can solve the fillable error with this way or AppServiceProvider i do with AppServiceProvider
    //protected $fillable = ['company', 'title', 'location', 'website', 'email', 'tags', 'description'] ;

    public function scopeFilter($query, array $filters) { // for search bar with Filter
        if($filters['tag'] ?? false) {
            $query->where('tags' , 'like' , '%' . request('tag') . '%') ;
        }

        if($filters['search'] ?? false) {
            $query->where('title' , 'like' , '%' . request('search') . '%')
            ->orWhere('description' , 'like' , '%' . request('search') . '%')
            ->orWhere('tags' , 'like' , '%' . request('search') . '%') ;
        }
    }

    //relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id') ;
    }
}
