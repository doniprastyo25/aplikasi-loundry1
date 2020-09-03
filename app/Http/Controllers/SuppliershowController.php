<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SuppliershowController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        // return $employee;
        return view('data.supplier', compact('supplier'));
    }
}
