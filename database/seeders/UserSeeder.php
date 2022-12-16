<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UserSeeder extends Seeder
{
   
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
            'fullname' => "Guru Domba",
            'username' => "gurudomba",
            'email' => "gurudomba@progate.com",
            'password' => Hash::make('master0919'),
            'age' => '58',
            'phone' => '6285720502214',
            'gender' => '1',
            'role_id' => '1',            
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'fullname' => "Ninja Ken",
            'username' => "ninjaken",
            'email' => "ninjaken@progate.com",
            'password' => Hash::make('ninja0310'),
            'age' => '18',
            'phone' => '6285720502215',
            'gender' => '1',
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'fullname' => "Ben",
            'username' => "ben",
            'email' => "ben@progate.com",
            'password' => Hash::make('ben0507'),
            'age' => '15',
            'phone' => '6285720502216',
            'gender' => '1',
            'role_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'fullname' => "Arti Hikmatullah Perbawana Sakti Buana",
            'username' => "thesaktibuana",
            'email' => "thesaktibuana@progate.com",
            'password' => Hash::make('Password1'),
            'age' => '38',
            'phone' => '6285720502217',
            'gender' => '1',
            'role_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //Refactor 50 other records
        User::factory()->count(50)->create();
    }
}
