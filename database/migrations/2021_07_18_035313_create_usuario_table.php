<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('idusuario');
            $table->unsignedBigInteger('idrol')->default(2)->index('usuario_idrol_foreign');
            $table->string('username', 255)->unique();
            $table->string('nombre', 255);
            $table->string('email', 255)->unique();
            $table->tinyInteger('estado')->default(1);
            $table->tinyInteger('eliminado')->default(0);
            $table->dateTime('email_verified_at')->nullable();
            $table->string('password', 255);
            $table->string('remember_token', 255)->nullable();
            $table->unsignedInteger('idusuario_responsable')->nullable();
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
        Schema::dropIfExists('usuario');
    }
}
