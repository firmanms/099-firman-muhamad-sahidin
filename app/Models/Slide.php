<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_id',
        'title',
        'subtitle',
        'image',
    ];

    public function sites(): BelongsTo
    {
        return $this->belongsTo(Sites::class,'site_id','id');
    }
}
