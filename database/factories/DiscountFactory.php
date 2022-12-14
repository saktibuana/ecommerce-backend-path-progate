<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discount>
 */
class DiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Paket Diskon ".random_int(1,100),
            'description' => "Disponsori oleh ".fake()->name(),
            'percent' => random_int(0,100),
            'active' => random_int(0,1),
            'created_at' => now(),
            'updated_at' => now(),            
        ];
    }
}
