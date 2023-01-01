<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\ProductLabel;

class ProductLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use WithoutModelEvents;

    public function run()
    {
        //TRUNCATE TABLE
        Schema::disableForeignKeyConstraints();
        DB::table('product_label')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('product_label')->insert([
            'title' => "Terbaik",
            'desc' => "KETERANGAN Produk Terbaik",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('product_label')->insert([
            'title' => "Promo",
            'desc' => "KETERANGAN Produk Dalam Promo",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('product_label')->insert([
            'title' => "Baru",
            'desc' => "KETERANGAN Produk Terbaru",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        //Refactor 50 other records
        // ProductLabel::factory()->count(1000)->create();
    }
}
