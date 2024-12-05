<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{

    /// index anggota

    public function indexanggota(Request $request){
        return view('pagesAdmin.dashboard.index');
    }

    //list anggota

    public function listanggota(Request $request){
        $anggotas = User::where('role','admin')->get();
        return view('pagesAdmin.anggota.listanggota', compact('anggotas'));
    }

    //Tambah anggota 
 
    public function create(){
        return view('pagesAdmin.anggota.tambah');
    }
    
        public function storeanggota(Request $request){
    
            //validasi data
            $request->validate([
                'nama'          => 'required|max:255',
                'email'         => 'required',
                'password'     => 'required'
            ],[
                'nama.required'         => 'Nama Harus Di Isi',
                'nama.max'              => 'Nama Maksimal 255 Karakter',
                'email.required'        => 'email Harus Di Isi',
                'password.required'     =>'Password Harus Di Isi'
                
             
            ]);
    
             //foto
             if($request->hasFile('foto')){
                $file = $request->file('foto');
                $fileName = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('images'), $fileName);
            }
    
            ///masukan data kedatabase
            $storeDataAnggota=[ 
                'nama'       => $request->nama,  
                'email'      => $request->email,
                'password'   =>bcrypt($request->password),
                'role'      =>'admin'

                
              ];
    
              User::create($storeDataAnggota); 
              return redirect('/listanggota');
        }

        ///Fungsi Hapus

        public function destroyanggota($id){
            $anggotas = User::find($id);
            if($anggotas->foto && file_exists(public_path('images/'. $anggotas->foto))){
                unlink(public_path('images/'. $anggotas->foto));
            }
            $anggotas -> delete();
            return redirect('/listanggota');
        }

        //Edit anggota

        public function editanggota($id){
            $dataAnggota = User::find($id);
            $users  = User::all();
    
            return view('pagesAdmin.anggota.editanggota',compact('dataAnggota','users'));
        }
        
        public function update(Request $request, $id){
            //Validasi
            $request->validate([
                'nama'          => 'required|max:255',
                'email'         => 'required',
            ],[
                'nama.required'     => 'Nama Harus Di Isi',
                'nama.max'          => 'Nama Maksimal 255 Karakter',
                'email.required'    => 'Minuman Harus Di Isi'
            ]);
    
            $updateDataAnggota=[
                'nama'      => $request->nama,
                'email'     => $request->email,  
              ];
              $dataAnggota = User::find($id)->update($updateDataAnggota  );
              return redirect('/listanggota');
        }

        //Profile

     public function profile(){
        return view('pagesAdmin.formulir.profile');
    }
}
