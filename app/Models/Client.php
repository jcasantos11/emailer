<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $casts = [
        'email' => 'array',
        'contact_number' => 'array',
    ];

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }
}
