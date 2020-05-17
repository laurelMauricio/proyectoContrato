<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');//no revise las clases foraneas

        DB::table('contrato')->truncate();
        DB::table('persona')->truncate();//actualizar datos de la tabla
        
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');//volverlo como estaba
        
        $this->call(PersonaSeeder::class);//llama al archivo seeder
        $this->call(UnidadSolicitanteSeeder::class);
        $this->call(ContratoSeeder::class);
        
        
    }
}
