<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Descripcion');
            $table->double('Precio', 8, 2);
            $table->unsignedInteger('Stock');
            $table->string('Imagen', 100);
            $table->unsignedInteger('TipoMueble');

            $table->foreign('TipoMueble')->references('Nombre')->on('tipomueble')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}