<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProductTypeSeeder::class,
            CreateUsersSeeder::class,
            PriortyCodeSeeder::class,
            // CountrySateCitySeeder::class,
            // ProductSeeder::class,
            // ProductModelSeeder::class,
            // ProductNumberSeeder::class,
            // WarrantyCodesSeeder::class,
        ]);
    }
}
