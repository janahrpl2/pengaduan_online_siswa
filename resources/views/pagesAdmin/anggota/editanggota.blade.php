@extends('layoutsAdmin.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="/listanggota" class="btn btn-warning mb-5">Kembali</a>
            <form action="/update/anggota{{$dataAnggota->id}}" method="POST">
                @csrf
                <div class=" mb-3">
                    <label for ="">Nama</label>
                    <input name="nama" value="{{ $dataAnggota->nama }}" type="text" class="form-control" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1">
                    @error('nama')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input class="form-control" name="email" value="{{$dataAnggota->email}}" id="" cols="30" rows="10"></input>
                </div>
                <button typ="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection