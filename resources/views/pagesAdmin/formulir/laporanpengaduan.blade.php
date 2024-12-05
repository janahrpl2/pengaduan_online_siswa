@extends('layoutsAdmin.app')
@section('content')
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <table class="table">
      <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Pengaduan</th>
        <th scope="col">Kategori</th>
        <th scope="col">Foto</th>
        <th scope="col">Aksi</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($pengaduans as $no => $pengaduan)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $pengaduan->nama }}</td>
                    <td>{{ $pengaduan->kelas }}</td>
                    <td>{{ $pengaduan->pengaduan }}</td>
                    <td>{{ $pengaduan->kategori->nama_kategori}}</td>
                    <td><img width="100" src="{{ asset('images/'.$pengaduan->foto) }}" alt=""></td>
                    <td>
                        <a href="/keterangan/{{$pengaduan->id}}" class="btn btn-primary">Kerjakan</a>
                        <a onClick="return confirm('Anda Yakin Ingin Menghapus Ini')" href="/destroyPengaduan/{{$pengaduan->id}}"class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        @endforeach
      </tbody>
      </table>
    </div> 
  </div>
</div>
@endsection