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
            'name' => 'Model 1',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Model 2',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Model 3',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Model 4',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);
        Model::create([
            'name' => 'Model 5',
            'price' => 0,
            'virtual' => null,
            'development_id' => '1'
        ]);

        Model::create([
            'name' => 'Model 1',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Model 2',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Model 3',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Model 4',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
        Model::create([
            'name' => 'Model 5',
            'price' => 0,
            'virtual' => null,
            'development_id' => '2'
        ]);
    }
}
