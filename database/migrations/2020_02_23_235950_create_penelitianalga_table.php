<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianalgaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitianalga', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('user',30);
            $table->String('tanggal',20);
            $table->String('keterangan',255);
            $table->String('dokumen',100)->nullable();
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
        Schema::dropIfExists('penelitianalga');
    }
}
