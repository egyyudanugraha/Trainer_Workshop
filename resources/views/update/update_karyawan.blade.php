@extends('utama.index')

@section('title', 'Edit Karyawan')

@section('content')
<div class="row">
    <div class="col-md-12">
    <form action="/karyawan/{{ $karyawan->id }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" value="{{ $karyawan->nama }}" name="nama">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" value="{{ $karyawan->alamat }}" name="alamat">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" value="{{ $karyawan->jabatan }}" name="jabatan">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    </div>
</div>

@endsection