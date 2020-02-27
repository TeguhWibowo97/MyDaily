@extends('layout.master')

@section('title','Penelitian Coffee')
@section('judul','Penelitian Coffee')

@section('content')
    <button class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
    
    @if (session('status'))
    <div class="container">
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ session('status') }}</strong>
      </div>
    </div>
    @endif
    <table class="table table-striped mb-3">
        <thead class="thead-dark">
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
                <td class="text-center"><img src="/assetAdmin/images/download.png" width="25px"></td>
                <td>
                  <a href="/penelitian/coffee/edit/{{ $penelitian->id }}">
                    <button class="btn btn-primary"><i class="fas fa-cog"></i></button>
                  </a>
                  <a href="/penelitian/coffee/hapus/{{$penelitian->id}}" onclick="javascript:return confirm('Apakah anda yakin akan menghapus data ?');">
                    <button class="btn btn-danger">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </a>
                </td>
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
        <form action="/penelitian/coffee/create" method="POST">
        @csrf
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>

    </div>
  </div>
</div>