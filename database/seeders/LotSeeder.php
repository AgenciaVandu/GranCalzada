<?php

namespace Database\Seeders;

use App\Models\Lot;
use Illuminate\Database\Seeder;

class LotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 305 ; $i++) {
            Lot::create([
                'number' => $i,
                'measures' => '7x17',
                'area' =>  '119',
                'model_id' => rand(1,5),
            ]);
        }
    }
}
