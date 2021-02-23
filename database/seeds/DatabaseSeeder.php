<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(WishlistSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(SpecsSeeder::class);
        $this->call(ProductSpecSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderProductSeeder::class);
    }
}
