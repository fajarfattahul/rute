<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemasaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_sales')->unsigned();
            $table->bigInteger('id_lokasi')->unsigned();
            $table->dateTime('waktu_pemasaran');
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
        Schema::dropIfExists('pemasarans');
    }
}
