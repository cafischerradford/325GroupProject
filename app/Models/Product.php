<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['name', 'price', 'unit_label', 'image'];
    public $timestamps = false;

    // public string $name;
    // public int $price;
    // public string $unit_label;
    // public string $image;

    // public function __construct(string $name, int $price, string $unit_label, string $image) {
    //     $this->name = $name;
    //     $this->price = $price;
    //     $this->unit_label = $unit_label;
    //     $this->image = $image;
    // }
}
