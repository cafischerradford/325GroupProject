<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Product extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'price', 
        'unit_label',
        'image'
    ];
    public $timestamps = false;
}
