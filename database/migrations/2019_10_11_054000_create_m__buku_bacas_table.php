<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMBukuBacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baca_buku', function (Blueprint $table) {
            $table->bigIncrements('id_baca');
            $table->string('id_buku',50);
            $table->string('id_pembaca',50);
            $table->string('id',50);
            $table->date('tanggal_baca');
            $table->date('tanggal_selesai');
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
        Schema::dropIfExists('baca_buku');
    }
}
