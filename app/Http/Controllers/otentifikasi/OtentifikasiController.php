<?php

namespace App\Http\Controllers\otentifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;
use App\User;
// use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class OtentifikasiController extends Controller
{
    public function index()
    {
        return view('otentifikasi/login');
    }
    public function login(Request $request)
    {
        // dd($request->all());
        // $data = Employee::where('username',$request->username)->firstOrFail();
        // $data = User::where('username',$request->username)->firstOrFail();
        // if ($data){
        //     if (Hash::check($request->password, $data->password)) {
        //         session(['berhasil_login' => true]);
        //         return redirect('dashboard');
        //     }
        // }
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            session(['berhasil_login' => true]);
            return redirect('dashboard');
        }
        return redirect('/')->with('message','username/password salah');

        // if(Auth::attempt($request->only('username','password'))){
        //     return redirect('dashboard');
        // }
        

    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}