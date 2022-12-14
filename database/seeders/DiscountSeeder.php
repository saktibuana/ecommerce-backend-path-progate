<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Remove all records
        // Discount::truncate();

        //Refactor just 1(one) record
        // DB::table('discount')->insert([
        //     'name' => "Paket Diskon ".random_int(1,2000),
        //     'description' => "Keterangan Paket Diskon disponsori oleh ".fake()->name(),
        //      // Str::random(100),
        //     'percent' => random_int(100000,800000),
        //     'active' => random_int(0,1),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        //Refactor 50 other records
        Discount::factory()->count(50)->create();
    }
}
