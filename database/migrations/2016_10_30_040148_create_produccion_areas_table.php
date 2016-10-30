<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateproduccionAreasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccion_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 255);
            $table->string('nombre', 255);
            $table->integer('empleado_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produccion_areas');
    }
}
