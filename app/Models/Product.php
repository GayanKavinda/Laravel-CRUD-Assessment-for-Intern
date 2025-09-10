<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; // HINT: Use Eloquent's Model features.

class Product extends Model
{
    // HINT: Specifies columns that can be mass-assigned.
    protected $fillable = [
        'name',
        'description',
        'price',
        // 'image' 
    ];

    // HINT: Automatically converts database columns to specified data types.
    protected $casts = [
        // HINT: Ensures 'price' is a decimal with two places.
        'price' => 'decimal:2',
    ];
}