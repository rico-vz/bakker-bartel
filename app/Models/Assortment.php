<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assortment extends Model
{
    use HasFactory;
    protected $table = 'assortment';

    protected $fillable = [
        'category',
        'product_name',
        'price',
        'description',
        'image',
    ];
}