<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Mobiles',
            'status'=>1,
            'photo'=>'Mobiles.jpg',

        ]);
        DB::table('categories')->insert([
            'name' => 'Laptops',
            'status'=>1,
            'photo'=>'Laptops.jpg',

        ]);
        DB::table('categories')->insert([
            'name' => 'Tablets',
            'status'=>1,
            'photo'=>'Tablets.jpg',

        ]);
        DB::table('categories')->insert([
            'name' => 'Cameras',
            'status'=>1,
            'photo'=>'Cameras.jpg',

        ]);
    }
}
