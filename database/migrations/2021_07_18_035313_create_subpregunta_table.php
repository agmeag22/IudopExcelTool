<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubpreguntaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subpregunta', function (Blueprint $table) {
            $table->increments('idsubpregunta');
            $table->string('num_subpregunta', 11)->nullable()->default('NULL');
            $table->unsignedInteger('idpregunta')->index('idpregunta');
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
        Schema::dropIfExists('subpregunta');
    }
}
