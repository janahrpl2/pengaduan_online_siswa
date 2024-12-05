@extends('layoutsAdmin.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="/dashboard/anggota" class="btn btn-warning mb-5">Kembali</a>
            <form action="/store/anggota" method="POST">
                @csrf
                <div class=" mb-3">
                 <label for ="">Nama</label>
                    <input name ="nama" value="{{ old('nama') }}" type="text" class="form-control" placeholder="nama" aria-label="Username" aria-describedby="basic-addon1">
                      @error('nama')

                        <p class="text-danger">{{$message}}</p>

                      @enderror
                </div>
                <div class=" mb-3">
                 <label for ="">Email</label>
                    <input name ="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="email" aria-label="Username" aria-describedby="basic-addon1">
                      @error('email')

                        <p class="text-danger">{{$message}}</p>

                      @enderror
                <div class="mb-3">
                  <label for="">Password</label>
                    <input name ="password" value="{{ old('password') }}" type="text" class="form-control" placeholder="password" aria-label="Username" aria-describedby="basic-addon1">
                      @error('password')
                        <p class="text-danger">{{$message}}</p>
                      @enderror
                </div>
                <button typ="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection