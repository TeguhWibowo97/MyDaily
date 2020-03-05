<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitiancoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitiancoffee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('user',30)->nullable();
            $table->String('tanggal',20)->nullable();            
            $table->String('keterangan',255)->nullable();
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
        Schema::dropIfExists('penelitiancoffee');
    }
}
