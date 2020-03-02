<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPenelitianAlga extends Model
{
    protected $table="penelitianalga";

    protected $fillable = ['user','tanggal','keterangan','dokumen'];
}
