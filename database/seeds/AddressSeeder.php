<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'street' => 'Nasr city',
            'type'=>'home',
            'building_no'=>'19',
            'floor_num'=>'5',
            'Region_id'=>'1',
            'user_id'=>'1',
        ]);
    }
}
