<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'postcode',
        'city',
        'beds',
        'baths',
        'rooms',
        'space',
        'price',
        'headline',
        'description',
        'user_id',
    ];

    function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
