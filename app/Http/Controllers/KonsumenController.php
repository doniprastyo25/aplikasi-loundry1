<?php

namespace App\Http\Controllers;

use App\Konsumen;
use Illuminate\Http\Request;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsumen = Konsumen::all();
        return view('data.konsumen.konsumen', compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.konsumen.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $konsumen = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required',
            'kategori' => 'required',
            ],
            [
            'name.required' => 'nama belum diisi',
            'address.required' => 'address belum diisi',
            'telp.required' => 'telp belum diisi',
            'kategori.required' => 'kategori belum diisi',
            ]);
        $konsumen = new Konsumen;

        $konsumen->name = $request->name;
        $konsumen->address = $request->address;
        $konsumen->telp = $request->telp;
        $konsumen->kategori = $request->kategori;

        $konsumen->save();

        return redirect('konsumen')->with('status', 'data telah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function show(Konsumen $konsuman)
    {
        // return $konsuman;
        return view('data.konsumen.show', compact('konsuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function edit(Konsumen $konsuman)
    {
        return view('data.konsumen.edit', compact('konsuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Konsumen $konsuman){
    {
            $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telp' => 'required',
            'kategori' => 'required',
            ],
            [
            'name.required' => 'nama belum diisi',
            'address.required' => 'address belum diisi',
            'telp.required' => 'telp belum diisi',
            'kategori.required' => 'kategori belum diisi',
            ]);
        $konsuman->name = $request->name;
        $konsuman->address = $request->address;
        $konsuman->telp = $request->telp;
        $konsuman->kategori = $request->kategori;

        $konsuman->save();

        return redirect('konsumen')->with('status', 'data telah diedit');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Konsumen $konsuman)
    {
        $konsuman->delete();
        return redirect('konsumen')->with('status', 'data telah dihapus');
    }
}
