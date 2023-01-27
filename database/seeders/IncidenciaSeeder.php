<?php

namespace Database\Seeders;

use App\Models\Incidencia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Incidencia::factory()
                    ->count(50)
                    ->create();
    }
}
