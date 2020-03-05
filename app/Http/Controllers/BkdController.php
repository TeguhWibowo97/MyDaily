<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MIdentitas;

class BkdController extends Controller
{
    public function identitas()
    {
        $bkd = MIdentitas::all();
        return view('bkd.identitas',['bkd'=>$bkd]);
    }

    public function input(Request $request)
    {
        MIdentitas::where('id',1)->update([
            'no_sertifikat' => $request->no_sertifikat,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'gelar_depan' => $request->gelar_depan,
            'gelar_belakang' => $request->gelar_belakang,
            'alamat_pt' => $request->alamat_pt,
            'jabatan_fungsional' => $request->jabatan_fungsional,
            'golongan' => $request->golongan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'pendidikan_s1' => $request->pendidikan_s1,
            'pendidikan_s2' => $request->pendidikan_s2,
            'pendidikan_s3' => $request->pendidikan_s3,
            'jenis' => $request->jenis,
            'bidang_ilmu' => $request->bidang_ilmu,
            'asesor1' => $request->asesor1,
            'asesor2' => $request->asesor2,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);
        $bkd = MIdentitas::all();
        return view('bkd.identitas',['bkd'=>$bkd]);
    }
}
