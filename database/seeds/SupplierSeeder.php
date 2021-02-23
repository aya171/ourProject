<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => 'yehia',
            'status'=>1,
            'national_id'=>12345678901234,
            'email'=>'yehia@gmail.com',
            'phone'=>'01234567890',
            'gender'=>'male',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('suppliers')->insert([
            'name' => 'AbdElrahman',
            'status'=>1,
            'national_id'=>98765432112345,
            'email'=>'AbdElrahman@gmail.com',
            'phone'=>'01098765432',
            'gender'=>'male',
            'password' => Hash::make('987654321'),
        ]);
    }
}
