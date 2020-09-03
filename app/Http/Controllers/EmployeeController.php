<?php

namespace App\Http\Controllers;

use App\User;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('akses_divisi', User::class);
        // $employee = Employee::all();
        $user = User::all();
        // return $employee;
        return view('admin.karyawan', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $employee = Employee::all();
        $user = User::all();
        return view('admin.tambah', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->validate([
            'username' => 'required',
            'name' => 'required',
            'password' => 'required',
            /* 'alamat' => 'required', */
            'level' => 'required',
            ],
            [
            'username.required' => 'username belum diisi',
            'name.required' => 'nama belum diisi',
            'password.required' => 'password belum diisi',
            /* 'alamat.required' => 'alamat belum diisi', */
            'level.required' => 'level belum diisi',
            ]);
        $user = new User;

        $user->username = $request->username;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        /* $user->alamat = $request->alamat; */
        $user->level = $request->level;

        $user->save();

        return redirect('karyawan')->with('status', 'data telah ditambah');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(User $karyawan)
    {
        return view('admin.detail', compact('karyawan'));
        // return $karyawan;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(User $karyawan)
    {
        return view('admin.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $karyawan)
    {
        // $karyawan = Employee::find($request);

        $karyawan->username = $request->username;
        $karyawan->name = $request->name;
        $karyawan->password = Hash::make($request->password);
        $karyawan->alamat = $request->alamat;
        $karyawan->level = $request->level;

        $karyawan->save();
        return redirect('karyawan')->with('status', 'data telah diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $karyawan)
    {
        $karyawan->delete();
        return redirect('karyawan')->with('status', 'data telah dihapus');
    }
}
