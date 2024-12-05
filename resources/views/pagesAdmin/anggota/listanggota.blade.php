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
        <th scope="col">Email</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      @foreach ($anggotas as $no => $anggota)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>{{ $anggota->role}}</td>
                    <td>
                        <a href="/edit/anggota{{$anggota->id}}" class="btn btn-primary">Edit</a>
                        <a onClick="return confirm('Anda Yakin Ingin Menghapus Ini')" href="/destroyanggota/{{$anggota->id}}"class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
        @endforeach
      </tr>
      </tbody>
      </table>
    </div>
  </div>
</div>
@endsection