<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name' , 'image_url' , 'slug' , 'number_of_price' , 'price' , 'category_id' 
    ];
    use HasFactory;
}
