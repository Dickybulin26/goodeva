<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    // protected $table = 'categories';

    protected $fillable = [
        'posts_id','category'
    ];

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'id', 'posts_id');
    }
}