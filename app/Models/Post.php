<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'sites_id',
        'post_category_id',
        'title',
        'slug',
        'description',
        'image',
        'date_publish',
    ];
}
