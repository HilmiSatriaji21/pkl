<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasus2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus2s', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_rw');
            $table->string('positif');
            $table->string('meninggal');
            $table->string('sembuh');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_rw')
                  ->references('id')->on('rws')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasus2s');
    }
}
