<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.supplier', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            ],
            [
            'name.required' => 'nama belum diisi',
            'alamat.required' => 'alamat belum diisi',
            'telp.required' => 'telp belum diisi',
            ]);
        $supplier = new Supplier;

        $supplier->nama = $request->nama;
        $supplier->alamat = $request->alamat;
        $supplier->telp = $request->telp;

        $supplier->save();

        return redirect('supplier')->with('status', 'data telah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        
        // return view('supplier.edit', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
            $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            ],
            [
            'nama.required' => 'jika ingin diganti nama tidak boleh dikosongkan',
            'alamat.required' => 'jika ingin diganti alamat tidak boleh dikosongkan',
            'telp.required' => 'jika ingin diganti telp tidak boleh dikosongkan',
            ]); 
       /*  $supplier = new Supplier; */

       $supplier->nama = $request->nama;
       $supplier->alamat = $request->alamat;
       $supplier->telp = $request->telp;

        $supplier->save();

        return redirect('supplier')->with('status', 'data telah diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect('supplier')->with('status', 'data telah dihapus');
    }
}
