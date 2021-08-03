<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->increments('idpregunta');
            $table->string('idinforme', 10)->nullable()->default('NULL');
            $table->string('num_pregunta', 10)->nullable()->default('NULL');
            $table->tinyInteger('eliminado')->default(0);
            $table->unsignedInteger('idusuario')->nullable()->index('idusuario');
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
        Schema::dropIfExists('pregunta');
    }
}
