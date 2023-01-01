<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(ProductCategory::class);
    }
    
    public function inventory(){
        return $this->belongsTo(ProductInventory::class);
    }

    public function discount(){
        return $this->belongsTo(Discount::class);
    }

    public function images(){
        return $this->belongsTo(Image::class);
    }

    public function labels(){
        return $this->belongsToMany(ProductLabel::class, 'labeled_products', 'product_id', 'label_id');
    }
}
