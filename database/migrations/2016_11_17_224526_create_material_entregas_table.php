<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatematerialEntregasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_entregas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('producto_id')->unsigned();
            $table->integer('empleado_id')->unsigned();
            $table->string('guid', 255);
            $table->string('barcode', 255);
            $table->integer('cantidad');
            $table->string('fechaEntrega');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::drop('material_entregas');
    }
}
