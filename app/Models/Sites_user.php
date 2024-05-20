<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites_user extends Model
{
    use HasFactory;
    protected $table='sites_user';

    protected $fillable = [
        'sites_id',
        'user_id',
    ];
}
