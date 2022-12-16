<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductCategory>
 */
class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $cat_name = "Kategori ".random_int(1,1000);   
         return [
            'name' => $cat_name,
            'desc' => "Keterangan ".$cat_name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
