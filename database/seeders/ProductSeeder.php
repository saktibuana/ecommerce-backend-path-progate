<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(10),
            'desc' => Str::random(10).'@progate.com',
            'sku' => Str::random(10).'@progate.com',
            'price' => Str::random(10).'@progate.com',
            'category_id' => Hash::make('password'),
            'inventory_id' => Hash::make('password'),
            'discount_id' => Hash::make('password'),
        ]);


        //Remove all records
        // Discount::truncate();

        //Refactor just 1(one) record
        // DB::table('products')->insert([
        //     'name' => Str::random(10),
        //     'desc' => Str::random(10).'@progate.com',
        //     'sku' => Str::random(10).'@progate.com',
        //     'price' => Str::random(10).'@progate.com',
        //     'category_id' => Hash::make('password'),
        //     'inventory_id' => Hash::make('password'),
        //     'discount_id' => Hash::make('password'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        //Refactor 50 other records
        Discount::factory()->count(50)->create();
    }
}
