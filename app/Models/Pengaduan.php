<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kelas',
        'pengaduan',
        'kategori_id',
        'user_id',
        'petugas_id',
        'status',
        'foto'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id');
    }

    public function user(){
        return $this->belongsTo(Kategori::class,'user_id');
    }

    public function petugas(){
        return $this->belongsTo(Kategori::class,'petugas_id');
    }

}
