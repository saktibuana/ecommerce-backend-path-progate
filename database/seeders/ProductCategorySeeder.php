<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('product_category')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('product_category')->insert([
            'quantity' => random_int(100,1000),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductInventory::factory()->count(50)->create();
    }
}
