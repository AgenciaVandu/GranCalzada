<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'section' => 'header',
            'slidable_id' => '1',
            'slidable_type' => 'App\Models\Development'
        ]);
        Slider::create([
            'section' => 'body',
            'slidable_id' => '1',
            'slidable_type' => 'App\Models\Development'
        ]);

        Slider::create([
            'section' => 'header',
            'slidable_id' => '2',
            'slidable_type' => 'App\Models\Development'
        ]);
        Slider::create([
            'section' => 'body',
            'slidable_id' => '2',
            'slidable_type' => 'App\Models\Development'
        ]);
    }
}
