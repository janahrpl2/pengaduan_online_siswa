@extends('layoutsUser.app')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="/listanggota" class="btn btn-warning mb-5">Kembali</a>
            <form action="/update/pengaduan{{$dataSiswa->id}}" method="POST">
                @csrf
                <div class=" mb-3">
                    <label for ="">Nama</label>
                    <input name="nama" value="{{ $dataSiswa->nama }}" type="text" class="form-control" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1">
                    @error('nama')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">Kelas</label>
                    <input class="form-control" name="kelas" value="{{$dataSiswa->kelas}}" id="" cols="30" rows="10"></input>
                </div>
                <div class="mb-3">
                    <label for="">Pengaduan</label>
                    <input class="form-control" name="kelas" value="{{$dataSiswa->pengaduan}}" id="" cols="30" rows="10"></input>
                </div>
                <div class=" mb-3">
                    <select name="kategori_id" class="form-select" aria-label="Default select example">
                      <option  value ="" selected>Pilih Kategori</option>
                          @foreach( $kategoris as $kategori )
                              <option {{ old('nama_kategori') == $kategori->id ? 'selected' : ''  }}  value="{{ $kategori->id}}">{{$kategori->nama_kategori}}</option>
                          @endforeach
                      </select>
                        @error('nama_kategori')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                  </div>
                <div class=" mb-3">
                    <label for ="">foto</label>
                        <input name="foto"  type="file" class="form-control" placeholder="foto" aria-label="Username" aria-describedby="basic-addon1">
                             @error('foto')
                                <p class="text-danger">{{$message}}</p>
                             @enderror
                            <img  width="100" class="mt-3 rounded-1" src="{{ asset('images/'.$dataSiswa->foto) }}" alt="">
                </div>
                <button typ="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection