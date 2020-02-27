@extends('layout.master')

@section('title','Form Ubah Data Penelitian Coffee')
@section('judul','Form Ubah Data Penelitian Coffee')

@section('content')
<div class="jumbotron my-3 text-dark" style="background:#AB9F9C;" >
<form action="/penelitian/coffee/edit/{{$penelitian->id}}" method="POST">
@csrf
    <h3 class="text-center">Ubah Data</h3>
    <hr>
    <div class="form-group">
        <div class="row">
            <label class="col-form-label">Tanggal : </label>
            <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $penelitian->tanggal }}">
        </div>
        <div class="row">
            <label for="message-text" class="col-form-label">Keterangan :</label>
            <textarea class="form-control" id="message-text" name="keterangan">{{ $penelitian->keterangan }}</textarea>
        </div>
        <div class="row">
            <label class="col-form-label">Upload Dokumen / File : </label>
            <input type="file" class="form-control" id="dokumen" name="dokumen">
        </div>
    </div>
    <button type="submit" class="btn btn-success">Ubah</button>
</form>
</div>
@endsection