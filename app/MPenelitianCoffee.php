<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPenelitianCoffee extends Model
{
    protected $table="penelitiancoffee";

    protected $fillable = ['user','tanggal','keterangan','dokumen'];
}
