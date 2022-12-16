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

        $cat_name = "Kategori ".random_int(1,1000);
        DB::table('product_category')->insert([
            'name' => $cat_name,
            'desc' => "Keterangan ".$cat_name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        ProductCategory::factory()->count(100)->create();
    }
}
