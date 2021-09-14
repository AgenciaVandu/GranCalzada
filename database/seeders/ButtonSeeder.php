<?php

namespace Database\Seeders;

use App\Models\Button;
use Illuminate\Database\Seeder;

class ButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Button::create([
            'url' => 'https://grancalzada.test/almada',
            'text' => 'Desarrollos',
            'description' => 'Conoce a detalle LOS DESARROLOS',
            'development_id' => '1'
        ]);
        Button::create([
            'url' => 'https://grancalzada.test/miraverde',
            'text' => 'Desarrollos',
            'description' => 'Conoce a detalle LOS DESARROLOS',
            'development_id' => '2'
        ]);
    }
}
