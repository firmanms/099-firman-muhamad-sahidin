<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'post_category_id',
        'title',
        'slug',
        'description',
        'image',
        'date_publish',
    ];

    public function sites(): BelongsTo
    {
        return $this->belongsTo(Sites::class,'site_id','id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Post_category::class,'post_category_id','id');
    }
}
