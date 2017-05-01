<?php

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
use Illuminate\Http\Request;

Route::get('coba', function () {
	$produks = App\Produk::all();
    return view('ajax.index',compact('produks'));
});

Route::get('coba/{produk_id}', function($produk_id) {
	$produk = App\Produk::find($produk_id);
	return response()->json($produk);
});

Route::post('coba', function(Request $request) {
	$produk = App\Produk::create($request->all());
	return response()->json($produk);
});

Route::put('coba/{produk_id?}', function(Request $request,$produk_id) {
	$produk = App\Produk::find($produk_id);
	$produk->name = $request->name;
	$produk->details = $request->details;
	$produk->save();
	return response()->json($produk);
});

Route::delete('coba/{produk_id?}', function($produk_id) {
	$produk = App\Produk::find($produk_id);
	$produk->delete();
	return response()->json($produk);
});
