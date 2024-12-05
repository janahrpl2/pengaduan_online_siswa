@extends('layoutsAdmin.master')
@section ('content')

<div class="crad">
    <div class="card-body">
    <a href="/formulir" class="btn btn-warning mb-5">Kembali</a>
    <h5 class="card-title">Profile Saya</h5>
        <hr>
        <hr>
        <div>
            <p>Nama : {{Auth::User()-> nama}} </p>
        </div>
        <hr>
        <div>
            <p>Email : {{Auth::User()-> email}} </p>
        </div>
        <hr>
        <div>
            <p>Status : {{Auth::User()-> role}} </p>
        </div>
        <hr>
    </div>
</div>

@endsection