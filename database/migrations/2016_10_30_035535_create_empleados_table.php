<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateempleadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_empleado_id')->unsigned();
            $table->integer('turno');
            $table->string('guid', 255);
            $table->string('nombre', 255);
            $table->integer('genero');
            $table->integer('antiguedad');
            $table->integer('bataEntrega');
            $table->integer('bataTalla');
            $table->integer('camisaEntrega');
            $table->integer('camisaTalla');
            $table->integer('pantalonEntrega');
            $table->integer('pantalonTalla');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_empleado_id')->references('id')->on('tipo_empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empleados');
    }
}
