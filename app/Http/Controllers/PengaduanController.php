<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kategori;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    ///PENGADUAN


    public function index(Request $request)
    {
        // Fetch all Pengaduan records along with their related Kategori
        $pengaduans = Pengaduan::with('kategori')->get();
    
        // Pass the data to the view
        return view('pagesUser.home.index', compact('pengaduans'));
    }
    

    //Tambah Pengaduan

    public function create(){
    $kategoris = Kategori::all();
    return view('pagesUser.pengaduanku.tambah',compact('kategoris'));
    }

    public function store(Request $request){

        //validasi data
        $request->validate([
            'nama'          => 'required|max:255',
            'kelas'         => 'required',
            'pengaduan'     => 'required',
            'kategori_id'   =>'required',
            'foto'          =>  'required'
        ],[
            'nama.required'         => 'Nama Harus Di Isi',
            'nama.max'              => 'Nama Maksimal 255 Karakter',
            'kelas.required'        => 'Kelas Harus Di Isi',
            'pengaduan.required'    =>'Pengaduan Harus Di Isi',
            'kategori_id.required'  => 'Kategori Harus Di Isi',
            
         
        ]);

         //foto
         if($request->hasFile('foto')){
            $file = $request->file('foto');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('images'), $fileName);
        }

        ///masukan data kedatabase
        $storeDataPengaduan=[ 
            'user_id'    => Auth::user()->id,
            'nama'       => $request->nama,  
            'kelas'      => $request->kelas,
            'pengaduan'  => $request->pengaduan,
            'kategori_id'=> $request->kategori_id,
            'foto'       => $fileName     
          ];

          Pengaduan::create($storeDataPengaduan); 
          return redirect('/listpengaduan');
        }
        //fungsi hapus
    public function destroyPengaduan($id){
        $pengaduans = pengaduan::find($id);
        if($pengaduans->foto && file_exists(public_path('images/'. $pengaduans->foto))){
            unlink(public_path('images/'. $pengaduans->foto));
        }
        $pengaduans -> delete();
        return redirect('/listpengaduan');
    }
     //profile

     public function profile(){
        return view('pagesUser.pengaduanku.profile');
    }

    //index admin

    public function pengaduan(Request $request){
        $pengaduans = Pengaduan::all();
        return view('pagesAdmin.formulir.laporanpengaduan', compact('pengaduans'));
    }

    public function dashboard(Request $request){
        return view('pagesUser.homeDashboard.index');
    }

    public function listpengaduan(Request $request){
        $pengaduans = Pengaduan::where('user_id', Auth::user()->id)->get();
        return view('pagesUser.pengaduanku.listpengaduan', compact('pengaduans'));
    }








    public function edit($id)
    {
        // Find the status by ID, or show 404 if not found
        $status =Pengaduan::findOrFail($id);

        // Return the edit view with the status data
        return view('status.edit', compact('status'));
    }

    public function updateKeterangan(Request $request, $id)
    {
        // Find the status by ID
        $status = Pengaduan::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'status' => 'required|string|max:255',  // Validate the keterangan field
        ]);

        // Update the status with the validated data
        $status->update([
            'status' => $validatedData['status'],
        ]);

        // Redirect with success message
        return redirect('/laporan/pengaduan')->with('success', 'Keterangan updated successfully!');
    }




    



    //edit Pengaduan
    public function editPengaduan($id){
        $dataSiswa  = User::find($id);
        $pengaduans = Pengaduan::all();

        return view('pagesUser.pengaduanku.edit',compact('dataSiswa','pengaduans'));
    }
    
    public function updatePengaduan(Request $request, $id){
        //Validasi
        $request->validate([
            'nama'          => 'required|max:255',
            'kelas'         => 'required',
            'pengaduan'     =>'required',
            'kategori_id'   =>'required',
            'foto'          =>'required'
        ],[
            'nama.required'         => 'Nama Harus Di Isi',
            'nama.max'              => 'Nama Maksimal 255 Karakter',
            'kelas.required'        => 'Kelas Harus Di Isi',
            'pengaduan.required'    =>'Pengaduan Harus Di Isi',
            'kategori_id.required'  => 'Kategori Harus Di Isi',
        ]);

        $storeDataPengaduan=[ 
            'user_id'    => Auth::user()->id,
            'nama'       => $request->nama,  
            'kelas'      => $request->kelas,
            'pengaduan'  => $request->pengaduan,
            'kategori_id'=> $request->kategori_id,
            'foto'       => $fileName     
          ];

          $dataSiswa = User::find($id)->update($updateDataPengaduan);
          return redirect('/listanggota');
    }

    //STATUS

    public function tambahKeterangan($id){
        $users=User::all();
        $pengaduans= Pengaduan::find($id);

        if (!$pengaduans){
            return redirect()->back()->with('error','Data Pengaduan Tidak Ditemukan.');
        }
        return view('pagesUser.pengaduanku.keterangan',compact('users','pengaduans'));
    }

    public function storeKeterangan(Request $request, $id){
        $request->validate([
            'petugas_id'=>'required',
            'status'    =>'required|in:Tertunda, Sedang Di Proses, Berhasil Diproses',
        ],[
            'petugas_id.required'   =>'Data Petugas Harus Di isi Sesuai admin.',
            'status.required'       =>'Status Harus Di isi Sesuai Opsi',
        ]);
        $pengaduans=Pengaduan::find($id);
        if (!$pengaduans){
            return redirect()->back()->with('error','data pengaduan tidak ditemukan.');
        }
        $pengaduans->update([
            'petugas_id'=> Auth::user()->id,
            'status'    =>$request->status,
        ]);
        
    }
}
