<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\finance;
use App\Konsumen;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konsumen = Konsumen::all();
        return view('transaksi',compact('konsumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $finance = new finance;
        $finance->tgl = $request->tanggal;
        $finance->keterangan = $request->kategori;
        $finance->jumlah = $request->berat;
        $finance->t_masuk = $request->total;
        $finance->save();

        $transaction = new Transaction;
        $transaction->kategori = $request->kategori;
        $transaction->berat = $request->berat;
        $transaction->tarif = $request->total;
        $transaction->tanggal = $request->tanggal;
        $transaction->konsumen = $request->nama;
        $transaction->save();

        return redirect('riwayat')->with('status','Transaksi telah dilakukan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
