<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('no_sertifikat',20);
            $table->String('nip',20);
            $table->String('nidn',16);
            $table->String('nama',100);
            $table->String('gelar_depan',15);
            $table->String('gelar_belakang',15);
            $table->String('alamat_pt',255);
            $table->String('jabatan_fungsional',50);
            $table->String('golongan',10);
            $table->String('tanggal_lahir',20);
            $table->String('tempat_lahir',50);
            $table->String('pendidikan_s1',100);
            $table->String('pendidikan_s2',100);
            $table->String('pendidikan_s3',100);
            $table->String('jenis',30);
            $table->String('bidang_ilmu',30);
            $table->String('asesor1',100);
            $table->String('asesor2',100);
            $table->String('no_hp',13);
            $table->String('email',50);
            $table->String('ktp',100);
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
        Schema::dropIfExists('identitas');
    }
}
