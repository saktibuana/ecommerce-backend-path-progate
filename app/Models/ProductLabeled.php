<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLabeled extends Model
{
    use HasFactory;

    // public function products(){
    //     return $this->belongToMany(Products::class, 'category_id');
    // }
}