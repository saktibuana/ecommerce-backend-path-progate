<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => "Gambar Nomer ".random_int(1,1050),
            'desc' => "Keterangan Gambar Nomer ".random_int(1,1050),
            'url' => "http://alamatgambar.com/".random_int(1,1050).".jpg",
            'created_at' => now(),
            'updated_at' => now(),            
        ];
    }
}
