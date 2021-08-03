<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indice', function (Blueprint $table) {
            $table->increments('idindice');
            $table->unsignedInteger('idinforme')->index('idinforme');
            $table->unsignedInteger('idcategoria')->index('idcategoria');
            $table->unsignedInteger('idpregunta')->index('idpregunta');
            $table->integer('eliminado')->default(0);
            $table->unsignedInteger('idusuario')->nullable()->index('idusuario');
            $table->timestamps();
            $table->unsignedInteger('idsubcategoria')->nullable()->index('idsubcategoria');
            $table->unsignedInteger('idsubpregunta')->nullable()->index('idsubpregunta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indice');
    }
}
