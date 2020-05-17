<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->bigIncrements('idc');
            $table->boolean('verificado')->nullable();
            $table->date('fecha_designacion')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('año_contrato')->nullable();
            $table->string('nom_proyecto')->nullable();
            $table->integer('num_proyecto')->nullable();
            $table->string('actividad')->nullable();
            $table->date('fecha_verificado')->nullable();
            $table->boolean('registrado')->nullable();
            

            $table->string('ci_persona');
            $table->unsignedBigInteger('id_unidsolic');
            $table->foreign('ci_persona')->references('ci_p')->on('persona');                      
            $table->foreign('id_unidsolic')->references('id_US')->on('unidadsolicitante');                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contrato', function (Blueprint $table) {
            $table->dropForeign('ci_persona');
        });
        Schema::table('contrato', function (Blueprint $table) {
            $table->dropForeign('id_unidsolic');
        });
        Schema::dropIfExists('contrato');
    }
}
