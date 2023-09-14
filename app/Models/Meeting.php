<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_id',
        'listing_id',
        'datetime',
    ];

    function agent(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function client(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function meeting(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }
}
