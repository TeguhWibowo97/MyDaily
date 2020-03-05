<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MIdentitas extends Model
{
    protected $table = "identitas";

    protected $fillable = ['no_sertifikat','nip','nidn','nama','gelar_depan','gelar_belakang','alamat_pt','jabatan_fungsional',
                            'golongan','tanggal_lahir','tempat_lahir','pendidikan_s1','pendidikan_s2','pendidikan_s3','jenis',
                            'bidang_ilmu','asesor1','asesor2','no_hp','email'
                        ];
}
