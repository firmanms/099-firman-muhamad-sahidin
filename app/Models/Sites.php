<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
