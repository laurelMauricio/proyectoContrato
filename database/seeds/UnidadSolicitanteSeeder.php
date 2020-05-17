<?php

use Illuminate\Database\Seeder;
use App\Models\UnidadSolicitante;

class UnidadSolicitanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UnidadSolicitante::class,10)->create([]);
    }
}
