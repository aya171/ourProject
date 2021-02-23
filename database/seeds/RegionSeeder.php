<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => 'Nasr city',
            'city_id'=>'1'
        ]);
        DB::table('regions')->insert([
            'name' => '6th october',
            'city_id'=>'1'
        ]);
        DB::table('regions')->insert([
            'name' => 'Maadi',
            'city_id'=>'1'
        ]);
        DB::table('regions')->insert([
            'name' => 'Zamalek',
            'city_id'=>'1'
        ]);

        DB::table('regions')->insert([
            'name' => 'Roushdy',
            'city_id'=>'2'
        ]);
        DB::table('regions')->insert([
            'name' => 'Smouha',
            'city_id'=>'2'
        ]);
        DB::table('regions')->insert([
            'name' => 'Elshatby',
            'city_id'=>'2'
        ]);
        DB::table('regions')->insert([
            'name' => 'Sporting',
            'city_id'=>'2'
        ]);
        
    }
}
