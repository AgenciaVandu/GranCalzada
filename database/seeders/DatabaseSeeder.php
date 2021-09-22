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
        $this->call(UserSeeder::class);
        $this->call(DevelopmentSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ButtonSeeder::class);
        $this->call(ModelSeeder::class);
        $this->call(LotSeeder::class);
    }
}
