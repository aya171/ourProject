<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'Fname' => 'ahmed',
            'Lname' => 'kamal',
            'email' => 'ahmed@gmail.com',
            'password' => Hash::make('123456789'),
            'phone'=>'01000550055', 
            'gender'=>'male'          

        ]);

        DB::table('users')->insert([
            'Fname' => 'aya',
            'Lname' => 'ahmed',
            'email' => 'aya@gmail.com',
            'password' => Hash::make('123456789'),
            'phone'=>'012345678990',
            'gender'=>'female'           

        ]);
        DB::table('users')->insert([
            'Fname' => 'mayada',
            'Lname' => 'essam',
            'email' => 'mayada@gmail.com',
            'password' => Hash::make('123456789'),
            'phone'=>'01000669977',
            'gender'=>'female'            

        ]);
    }
}
