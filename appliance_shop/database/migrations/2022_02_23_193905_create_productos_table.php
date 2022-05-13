<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('Precio');
            $table->string('Nombre_producto');
            $table->string('Modelo');
            $table->bigInteger('idCategoria_fk')->unsigned();
            $table->bigInteger('idMarca_fk')->unsigned();
            
            $table->foreign('idCategoria_fk')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('idMarca_fk')->references('id')->on('marcas')->onDelete("cascade");
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
