<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('idLoteria');
            $table->unsignedInteger('idSorteo')->default(0);
            $table->string('numeroGanador', 6);
            $table->string('primera', 2);
            $table->string('segunda', 2);
            $table->string('tercera', 2);
            $table->integer('idUsuario');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('awards');
    }
}
