<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLabel extends Model
{
    use HasFactory;

    protected $table = 'product_label';


    public function products(){
        // return $this->belongsToMany(Products::class);
        return $this->belongsToMany(Product::class, 'labeled_products', 'label_id', 'product_id');
    }
}
