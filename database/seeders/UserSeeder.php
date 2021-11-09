<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $zombies = array(
            ['name' => 'Enrico Marques', 'email' => 'enricothulio.marques@gmail.com', 'password' => Hash::make('Casa2209'), 'turma' => '5', 'utype' => '3']);
            
        \DB::table('users')->insert( $zombies );
    }
//php artisan db:seed --class=UserSeeder
}
