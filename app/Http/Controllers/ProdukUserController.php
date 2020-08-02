<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Produkreg;
class ProdukUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produk = Produkreg::get();
      return view('ProdukUser', ['produk' => $produk]);
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
        $produk = new Produkreg;
        $produk->tgl_kedatangan = $request->get('tgl_kedatangan');
        $produk->paket = $request->get('paket');
        $produk->nama_penerima = $request->get('nama');
        $produk->tanggal = $request->get('tanggal');
        $produk->alamat = $request->get('alamat');
        $gambar = $request->file('f_alamat');
        if ($gambar) {
          $gambar_path1 = $gambar->store('f_alamat','public');
          $produk->foto_alamat = $gambar_path1;
        }
        $gambar = $request->file('f_ktp');
        if ($gambar) {
          $gambar_path1 = $gambar->store('f_ktp','public');
          $produk->foto_ktp = $gambar_path1;
        }
        $produk->jam_sampai = $request->get('jam');
        $produk->phone = $request->get('phone');
        $produk->email = $request->get('email');
        $produk->save();
        return back();
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
