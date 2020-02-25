@extends('layout.master')

@section('title','Penelitian Coffee')
@section('judul','Penelitian Coffee')

@section('content')
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
    <table class="table">
        <thead>
            <th>#</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Dokumen</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($penelitian as $penelitian)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $penelitian->tanggal }}</td>
                <td>{{ $penelitian->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="col-form-label">Tanggal : </label>
            <input type="text" class="form-control" id="tanggal" name="tanggal">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Keterangan</label>
            <textarea class="form-control" id="message-text" name="keterangan"></textarea>
          </div>
          <div class="form-group">
            <label class="col-form-label">Upload Dokumen / File : </label>
            <input type="file" class="form-control" id="dokumen" name="dokumen">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>