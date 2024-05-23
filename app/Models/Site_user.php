<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_user extends Model
{
    use HasFactory;
    protected $table='site_user';

    protected $fillable = [
        'site_id',
        'user_id',
    ];
}
