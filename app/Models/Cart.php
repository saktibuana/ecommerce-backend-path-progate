<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'cart';


    // public function users(){
    //     return $this->hasMany(User::class, 'inventory_id');
    // }

    // public function products(){
    //     return $this->hasMany(Product::class, 'inventory_id');
    // }
}
