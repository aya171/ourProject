<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            'name' => 'Samsung',
            'status'=>1,
            'photo'=>'samsung.jpg',
            'category_id'=>'1'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Iphone',
            'status'=>1,
            'photo'=>'iphone.jpg',
            'category_id'=>'1'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Oppo',
            'status'=>1,
            'photo'=>'oppo.jpg',
            'category_id'=>'1'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Xiaomi',
            'status'=>1,
            'photo'=>'xiaomi.jpg',
            'category_id'=>'1'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Dell',
            'status'=>1,
            'photo'=>'dell.jpg',
            'category_id'=>'2'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Hp',
            'status'=>1,
            'photo'=>'hp.jpg',
            'category_id'=>'2'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Lenovo',
            'status'=>1,
            'photo'=>'lenovo.jpg',
            'category_id'=>'2'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Huawei',
            'status'=>1,
            'photo'=>'huawei.jpg',
            'category_id'=>'3'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Apple',
            'status'=>1,
            'photo'=>'apple.jpg',
            'category_id'=>'3'
        ]);

        DB::table('subcategories')->insert([
            'name' => 'Canon',
            'status'=>1,
            'photo'=>'canon.jpg',
            'category_id'=>'4'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'Nikon',
            'status'=>1,
            'photo'=>'nikon.jpg',
            'category_id'=>'4'
        ]);
        DB::table('subcategories')->insert([
            'name' => 'sony',
            'status'=>1,
            'photo'=>'sony.jpg',
            'category_id'=>'4'
        ]);
    }
}
