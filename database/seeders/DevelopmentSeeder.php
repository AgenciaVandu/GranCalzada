<?php

namespace Database\Seeders;

use App\Models\Development;
use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Development::create([
            'name' => 'Almada',
            'description' => 'Almada es un desarrollo tipo cerrada de 1,895 casas (5 diferentes modelos) que se encuentra en la parte sur de Gran Calzada, la cul concentra todos los servicios y amenidades que las familias necesitan para su vida,ofrece un parque libre y áreas verdes para actividades recreativas y de diversión.'
        ]);

        Development::create([
            'name' => 'Miraverde',
            'description' => 'Miraverde es una privada habitacional de 2,314 casas (4 diferentes modelos) que se encuentran en la parte norte de la Gran Calzada. Ofrece a sus habitantes un gran parque central que consta de 8 amenidades, espacios seguros a través de su caseta de seguridad, barda perimetral. Un entorno lleno de vegetación que crea un ambiente más fresco. Podrás encontrar un árbol cada 2 casas convirtendolo en un lugar para disfrutar.'
        ]);
    }
}
