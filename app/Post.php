<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug',
        'description',
        'publisher',
        'content',
        'image',
        'category_id',
        'click_count',
        'author'
    ];

    protected $with = ['category', 'authors'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function authors(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }

    public function addClick() {
        $this->increment('click_count');
        $this->save();
    }

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
