<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\User;

class KaryawanshowController extends Controller
{
    public function index()
    {
        $user = User::all();
        // return $employee;
        return view('data.karyawan', compact('user'));
    }
}
