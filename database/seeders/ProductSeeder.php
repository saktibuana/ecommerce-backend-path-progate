<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Product;

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

        //TRUNCATE TABLE
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();
        Schema::enableForeignKeyConstraints();

        $prod_rand = random_int(1,1150);
        $prod_name = "PRODUCT ".$prod_rand;
        $prod_sku = "PRO-".$prod_rand."-D";

        DB::table('products')->insert([
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
        ]);

        //Refactor 50 other records
        Product::factory()->count(1000)->create();
    }
}
