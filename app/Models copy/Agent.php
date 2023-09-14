<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'address', // street + #
        'postcode',
        'city',
        'telephone',
        'email',
        'website',
        'company',
        'vat_number',
        'password',
        'is_agent',
        'is_admin',
    ];

    function listing(): HasMany
    {
        return $this->hasMany(Listing::class);
    }

    function meeting(): HasMany
    {
        return $this->hasMany(Meeting::class);
    }
}
