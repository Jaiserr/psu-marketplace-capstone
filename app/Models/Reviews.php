<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_id',
        'rating',
        'review',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
