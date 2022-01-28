<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBocaDeAguasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boca_de_aguas', function (Blueprint $table) {
            $table->id();
            $table->mediumText('direccion');
            $table->integer('numero');
            $table->decimal('latitud', 10, 2);
            $table->decimal('longitud', 10, 2);
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
        Schema::dropIfExists('boca_de_aguas');
    }
}
