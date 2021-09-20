<?php

namespace Database\Seeders;

use App\Models\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::create([
            'name' => 'Aguamarina',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Magenta',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Ambar',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Violeta',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Violeta Plus',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);

        Model::create([
            'name' => 'Almendro',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Flamboyán Plus',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Bugambilia Plus',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Ceiba Plus',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
    }
}
