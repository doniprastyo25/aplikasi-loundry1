<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\CekLoginMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// jika masih dalam session tidak bisa menuju halaman login
Route::group(['middleware' => ['CekTerlogin']], function () {
    Route::get('/', 'otentifikasi\OtentifikasiController@index')->name('index');
    Route::post('login', 'otentifikasi\OtentifikasiController@login')->name('login');
});

// jika belum login akan dikembalikan ke halaman login
// Route::group(['middleware' => ['CekLoginMiddleware']], function () {
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('karyawan', function () {
        return view('admin/karyawan');
    });
    Route::get('karyawanshow', 'KaryawanshowController@index')->name('jongos');
    Route::get('suppliershow', 'SuppliershowController@index')->name('koko');
    Route::resource('konsumen', 'KonsumenController');
    Route::resource('karyawan', 'EmployeeController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('riwayat', 'RiwayatController');
    Route::resource('dashboard', 'DashboardController');
    /* --------------------- */
    // route stock
    Route::resource('stock', 'StockController');
    Route::get('stock/{stock}/pakai', 'StockController@pakai')->name('stock.pakai');
    Route::put('stock/{stock}/prosespakai', 'StockController@prosespakai')->name('stock.prosespakai');
    // end route stock
    /* --------------------- */
    Route::resource('pembelian', 'PembelianController');
    Route::resource('pemakaian', 'PemakaianController');
    Route::resource('finance', 'FinanceController');
    Route::resource('transaksi', 'TransaksiController');
    // logout
    Route::get('logout', 'otentifikasi\OtentifikasiController@logout')->name('logout');
    // Route::get('/home', 'HomeController@index')->name('home');
});
    
        
       
    


