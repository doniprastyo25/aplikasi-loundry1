<?php

namespace App\Http\Controllers;

use App\finance;
use App\Pemakaian;
use App\Pembelian;
use App\Supplier;
use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock = Stock::all();
        return view('data.stock.stock', compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('data.stock.tambah', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // input ke tabel stock
        $stock = new Stock;
        $stock->nama = $request->nama;
        $stock->stock = $request->stock;
        $stock->tgl_update = $request->tgl_update;
        $stock->supplier = $request->supplier;
        $stock->harga = $request->harga;
        $stock->save();

        // input ke tabel pembelianm  
        $pembelian = new Pembelian;
        $pembelian->tgl = $request->tgl_update;
        $pembelian->totali = $request->stock;
        $pembelian->supplier = $request->supplier;
        $pembelian->barang = $request->nama;
        $pembelian->totalh = $request->harga*$request->stock;
        $pembelian->save();

        // input ke tabel finance 
        $finance = new finance;
        $finance->tgl = $request->tgl_update;
        $finance->keterangan = $request->nama;
        $finance->jumlah = $request->stock;
        $finance->t_keluar = $request->harga*$request->stock;
        $finance->save();

        return redirect('stock')->with('status', 'data telah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)/* tambah */
    {
        // return $stock;
        return view('data.stock.update',compact('stock') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)/* tambah */
    {
        $stock->nama = $request->nama;
        $stock->stock = $request->stock+$request->tambah;
        $stock->tgl_update = $request->tgl_update;
        $stock->supplier = $request->supplier;
        $stock->harga = $request->harga;
        $stock->save();

        $pembelian = new Pembelian;
        $pembelian->tgl = $request->tgl_update;
        $pembelian->totali = $request->tambah;
        $pembelian->supplier = $request->supplier;
        $pembelian->barang = $request->nama;
        $pembelian->totalh = $request->harga*$request->tambah;
        $pembelian->save();

        // input ke tabel finance 
        $finance = new finance;
        $finance->tgl = $request->tgl_update;
        $finance->keterangan = $request->nama;
        $finance->jumlah = $request->tambah;
        $finance->t_keluar = $request->harga*$request->tambah;
        $finance->save();

        return redirect('stock')->with('status', 'data telah ditambah');
    }

    public function pakai(Stock $stock)
    {
        // return $stock;
        return view('data.stock.pakai', compact('stock'));
    }

    public function prosespakai(Request $request, Stock $stock)
    {
        $stock->nama = $request->nama;
        $stock->stock = $request->stock-$request->pakai;
        $stock->tgl_update = $request->tgl_update;
        $stock->save();

        $pemakaian = new Pemakaian;
        $pemakaian->tgl_pakai = $request->tgl_update;
        $pemakaian->barang = $request->nama;
        $pemakaian->jumlah = $request->pakai;
        $pemakaian->save();

        return redirect('stock')->with('status', 'data telah ditambah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        $stock->delete();

        return redirect('stock')->with('status', 'data berhasil dihapus');
    }
}
