<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sites extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'singkatan',
        'slug',
        'name_leader',
        'image_leader',
        'greeting',
        'video_profile',
        'address',
        'telp',
        'whatsapp',
        'email',
        'logo',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'site_user','site_id','id');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
