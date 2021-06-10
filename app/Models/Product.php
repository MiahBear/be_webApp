<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'products'
    ];

    // protected $casts = [
    //     'date_and_time' => 'date:hh:mm'
    // ];
}
