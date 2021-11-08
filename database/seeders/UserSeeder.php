<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Enrico Marques',
            'email' => 'enricothulio.marques@gmail.com',
            'password' => Hash::make('password'),
            'turma' => '4',
            'utype' => '3',
        ]);
    }
}
