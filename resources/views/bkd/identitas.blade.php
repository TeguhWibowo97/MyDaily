@extends('layout.master')

@section('title','BKD Identitas')
@section('judul','Identitas Dosen')

@section('imgjudul')
  <i class="fas fa-user"></i>
@endsection

@section('content')
<button class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal" >Input Data</button>
@foreach($bkd as $bkd)
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th>Keterangan</th>
      <th>Isi</th>
      <th>File</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nomor Sertifikat</td>
      <td>
        <input type="text" class="form-control" value="{{ $bkd->no_sertifikat }}" disabled>
      </td>
      <td>
        <img src="/assetAdmin/images/download.png" width="25px">
      </td>
    </tr>
    <tr>
      <td>NIP</td>
      <td>
        <input type="text" value="{{$bkd->nip}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>NIDN</td>
      <td>
        <input type="text" value="{{$bkd->nidn}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>NAMA</td>
      <td>
        <input type="text" value="{{$bkd->nama}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Gelar Depan</td>
      <td>
        <input type="text" value="{{$bkd->gelar_depan}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Gelar Belakang</td>
      <td>
        <input type="text" value="{{$bkd->gelar_belakang}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Alamat PT</td>
      <td>
        <input type="text" value="{{$bkd->alamat_pt}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Jabatan Fungsional</td>
      <td>
        <input type="text" value="{{$bkd->jabatan_fungsional}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Golongan</td>
      <td>
        <input type="text" value="{{$bkd->golongan}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>
        <input type="text" value="{{$bkd->tanggal_lahir}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td>
        <input type="text" value="{{$bkd->tempat_lahir}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Pendidikan S1</td>
      <td>
        <input type="text" value="{{$bkd->pendidikan_s1}}" class="form-control" disabled>
      </td>
      <td>
        <img src="/assetAdmin/images/download.png" width="25px">
      </td>
    </tr>
    <tr>
      <td>Pendidikan S2</td>
      <td>
        <input type="text" value="{{$bkd->pendidikan_s2}}" class="form-control" disabled>
      </td>
      <td>
        <img src="/assetAdmin/images/download.png" width="25px">
      </td>
    </tr>
    <tr>
      <td>Pendidikan S3</td>
      <td>
        <input type="text" value="{{$bkd->pendidikan_s3}}" class="form-control" disabled>
      </td>
      <td>
        <img src="/assetAdmin/images/download.png" width="25px">
      </td>
    </tr>
    <tr>
      <td>Jenis</td>
      <td>
        <input type="text" value="{{$bkd->jenis}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Bidang Ilmu</td>
      <td>
        <input type="text" value="{{$bkd->bidang_ilmu}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Asesor 1</td>
      <td>
        <input type="text" value="{{$bkd->asesor1}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Asesor 2</td>
      <td>
        <input type="text" value="{{$bkd->asesor2}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Nomor HP</td>
      <td>
        <input type="text" value="{{$bkd->no_hp}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Email</td>
      <td>
        <input type="email" value="{{$bkd->email}}" class="form-control" disabled>
      </td>
      <td>
        
      </td>
    </tr>
    <tr>
      <td>Ktp</td>
      <td colspan="2">
        <img src="/assetAdmin/images/download.png" width="25px">
      </td>
    </tr>
  </tbody>
</table>
@endforeach

@endsection
<!-- MODAL INPUT DATA START-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/bkd/update" method="POST">
        @csrf
          <div class="form-group">
            <label class="col-form-label">Nomor Sertifikat</label>
            <input type="text" class="form-control" name="no_sertifikat" placeholder="Masukkan nomor sertifikat">
            <input type="file" class="my-1" name="sertifikat">
          </div>
          <div class="form-group">
            <label class="col-form-label">NIP</label>
            <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP">
          </div>
          <div class="form-group">
            <label class="col-form-label">NIDN</label>
            <input type="text" class="form-control" name="nidn" placeholder="Masukkan NIDN">
          </div>
          <div class="form-group">
            <label class="col-form-label">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
          </div>
          <div class="form-group">
            <label class="col-form-label">Gelar Depan</label>
            <input type="text" class="form-control" name="gelar_depan" placeholder="Masukkan gelar depan">
          </div>
          <div class="form-group">
            <label class="col-form-label">Gelar Belakang</label>
            <input type="text" class="form-control" name="gelar_belakang" placeholder="Masukkan gelar belakang">
          </div>
          <div class="form-group">
            <label class="col-form-label">Alamat PT</label>
            <input type="text" class="form-control" name="alamat_pt" placeholder="Masukkan alamat pt">
          </div>
          <div class="form-group">
            <label class="col-form-label">Jabatan Fungsional</label>
            <select class="form-control" name="jabatan_fungsional">
              <option> </option>
              <option>Asisten Ahli</option>
              <option>Lektor</option>
              <option>Lektor Kepala</option>
              <option>Profesor</option>
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Golongan</label>
            <input type="text" class="form-control" name="golongan" placeholder="Masukkan golongan">
          </div>
          <div class="form-group">
            <label class="col-form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" name="tanggal_lahir" placeholder="Masukkan tgl lahir">
          </div>
          <div class="form-group">
            <label class="col-form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan tempat lahir">
          </div>
          <div class="form-group">
            <label class="col-form-label">Pendidikan S1</label>
            <input type="text" class="form-control" name="pendidikan_s1" placeholder="Masukkan nama Universitas">
            <input type="file" class="my-1" name="ijasah_s1">
          </div>
          <div class="form-group">
            <label class="col-form-label">Pendidikan S2</label>
            <input type="text" class="form-control" name="pendidikan_s2" placeholder="Masukkan nama Universitas">
            <input type="file" class="my-1" name="ijasah_s2">
          </div>
          <div class="form-group">
            <label class="col-form-label">Pendidikan S3</label>
            <input type="text" class="form-control" name="pendidikan_s3" placeholder="Masukkan nama Universitas">
            <input type="file" class="my-1" name="ijasah_s3">
          </div>
          <div class="form-group">
            <label class="col-form-label">Jenis</label>
            <select class="form-control" name="jenis">
              <option> </option>
              <option>DOSEN BIASA</option>
              <option>PROFESOR</option>
              <option>DOSEN DENGAN TUGAS TAMBAHAN</option>
              <option>PROFESOR DENGAN TUGAS TAMBAHAN</option>
            </select>
          </div>
          <div class="form-group">
            <label class="col-form-label">Bidang Ilmu</label>
            <input type="text" class="form-control" name="bidang_ilmu" placeholder="Masukkan bidang ilmu">
          </div>
          <div class="form-group">
            <label class="col-form-label">Asesor 1</label>
            <input type="text" class="form-control" name="asesor1" placeholder="Masukkan asesor 1">
          </div>
          <div class="form-group">
            <label class="col-form-label">Asesor 2</label>
            <input type="text" class="form-control" name="asesor2" placeholder="Masukkan asesor 2">
          </div>
          <div class="form-group">
            <label class="col-form-label">No HP</label>
            <input type="text" class="form-control" name="no_hp" placeholder="Masukkan no HP">
          </div>
          <div class="form-group">
            <label class="col-form-label">E-Mail</label>
            <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
          </div>
          <div class="form-group">
            <label class="col-form-label">KTP</label>
            <input type="text" class="form-control" name="ktp">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- MODAL INPUT DATA END-->