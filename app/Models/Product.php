<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    protected $fillable = [
        'name' , 'image_url' , 'slug' , 'number_of_price' , 'price' , 'category_id' 
    ];
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getOwnerUserNameAttribute(){

        return $this->user->name ;
    }
}
