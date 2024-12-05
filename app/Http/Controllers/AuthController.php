<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('pagesUser.login.register');

    }

    public function storeRegister(Request $request){

        //validasi data
        $request->validate([
            'nama'          => 'required|max:255',
            'email'         => 'required|unique:users,email',
            'password'      => 'required|min:8',
           
        ],[
            'nama.required'         => 'Nama Harus Di Isi',
            'nama.max'              => 'Nama Maksimal 255 Karakter',
            'email.required'        => 'Email Harus Di Isi',
            'email.unique'          => 'Email Sudah Ada',
            'password.required'     => 'password Harus Di Isi',
            'password.min'          => 'Password Mininam 8'
         
        ]);

        ///masukan data kedatabase
        $storeDataPengguna=[
            'nama'       => $request->nama,  
            'email'      => $request->email,
            'password'   =>bcrypt($request->password),
                            
            'role'       => 'user'
          ];

           User::create($storeDataPengguna); 
            return view('pagesUser.login.login');

    }

    //login

    public function login(){
        return view('pagesUser.login.login');
    }

    public function storeLogin(Request $request){ 
        $credentials = $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);
        
        if (auth()->attempt($credentials)){
            
            if (Auth::user()->role == 'user') {
                return redirect('/dashboard'); 
                
            }
            if (Auth::user()->role == 'admin') {
                return redirect('/dashboard/anggota');
                
            }
        } else{
            return redirect('/login')->with('error',' password salah');
        }

    }

    //logout

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}


