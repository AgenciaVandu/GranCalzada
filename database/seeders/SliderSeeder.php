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
            'development_id' => '1'
        ]);
        Slider::create([
            'section' => 'body',
            'development_id' => '1'
        ]);

        Slider::create([
            'section' => 'header',
            'development_id' => '2'
        ]);
        Slider::create([
            'section' => 'body',
            'development_id' => '2'
        ]);
    }
}
