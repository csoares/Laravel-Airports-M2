<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airport;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airports = [
            [
                'name'          => 'Aeroporto Francisco Sá Carneiro',
                'city'           => 'Porto',
                'reference'   => 'OPO',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Aeroporto da Portela',
                'city'           => 'Lisboa',
                'reference'   => 'LYS',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Aeroporto de Faro',
                'city'           => 'Faro',
                'reference'   => 'FAO',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'name'          => 'Aeroporto Cristiano Ronaldo',
                'city'           => 'Ilha da Madeira',
                'reference'   => 'CR7',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ];

        Airport::insert($airports);

    }
}
