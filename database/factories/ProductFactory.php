<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Product::class;

    public function definition()
    {
        $prod_rand = random_int(1,1150);
        $prod_name = "PRODUCT ".$prod_rand;
        $prod_sku = "PRO-".$prod_rand."-D";

        return [
            'name' => $prod_name,
            'desc' => "KETERANGAN ".$prod_name,
            'sku' => $prod_sku,
            'price' => random_int(1000,990000),
            'image_id' => random_int(1,100),
            'category_id' => random_int(1,50),
            'inventory_id' => random_int(1,50),
            'discount_id' => random_int(1,50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
