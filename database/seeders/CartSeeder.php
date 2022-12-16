<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Cart;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TRUNCATE TABLE
        Schema::disableForeignKeyConstraints();
        DB::table('cart')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('cart')->insert([
            'user_id' => random_int(1,100),
            'product_id' => random_int(1,100),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Refactor 50 other records
        Cart::factory()->count(50)->create();
    }
}
