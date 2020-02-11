@extends('utama.index')

@section('title', 'Halaman Data Karyawan')

@section('content')
<br>
    <div class="row">
        <div class="col-sm-12">
            <a href="/tambah" class="btn btn-primary">Tambah Data Karyawan</a>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $tampil)
                    <tr>
                        <td>{{ $tampil->id }}</td>
                        <td>{{ $tampil->nama }}</td>
                        <td>{{ $tampil->alamat }}</td>
                        <td>{{ $tampil->jabatan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection