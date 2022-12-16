<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use App\Models\Image;

class ImageSeeder extends Seeder
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
        DB::table('images')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('images')->insert([
            'title' => "Gambar Default Pertama",
            'desc' => "Gambar Default 1",
            'url' => "/image/image.jpg",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Refactor 50 other records
        Image::factory()->count(1000)->create();
    }
}
