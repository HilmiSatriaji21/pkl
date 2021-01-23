<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasuses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_negara')->unsigned();
            $table->string('jumlah_positif');
            $table->string('jumlah_meninggal');
            $table->string('jumlah_sembuh');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_negara')->references('id')->on('negaras')
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
        Schema::dropIfExists('kasuses');
    }
}
