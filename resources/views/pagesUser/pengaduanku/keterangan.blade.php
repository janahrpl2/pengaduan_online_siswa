@extends('layoutsUser.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="p-2 mt-4 me-3">
            <h1>Cek Pengaduan</h1>
            <form action="/store/keterangan/{{ $pengaduans->id }}/update" method="POST">
                @csrf
                <div class="form-group">
                    <label for="petugas_id">Petugas</label>
                    <input type="text" value="{{ Auth::user()->nama }}" name="petugas_id" id="petugas_id" class="form-control" readonly required>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="tertunda" {{ $pengaduans->status == 'tertunda'?'selectd':''}}>Tertunda</option>
                        <option value="Sedang Di Proses" {{ $pengaduans->status == 'sedang di proses'?'selected':''}}>Sedang Di Proses</option>
                        <option value="Berhasil DiProses" {{ $pengaduans->status == 'Berhasil Diproses'?'selected':''}}>Berhasil DiProses</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection