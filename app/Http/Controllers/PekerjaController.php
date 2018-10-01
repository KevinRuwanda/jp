<?php

namespace App\Http\Controllers;

use App\User;
use App\data;
use App\Produk;
use Auth;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no = 1;
        $pekerjas = User::where('role',2)->orderBy('created_at','asc')->paginate(30);
         $produks = Produk::all();
        return view('pekerja.tambah', compact('no','pekerjas','produks'));
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
     $this->validate($request,[
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
        'alamat' => 'required|string',
        'username' => 'required|string',
        'nohp' => 'required|string',
    ]);


     if (Auth::check() && Auth::user()->role == 1) {
      $user = User::create([
        'name' => $request->name,
        'username' => $request->username,
        'image'     => "https://www.gravatar.com/avatar/". md5( strtolower( trim(  $request->email ) ) ) ."?d=monsterid",
        'role'  => 2,
        'email' => $request->email,
        'token'     => str_random(25),
        'password' => bcrypt($request->password),
    ]); 
      data::create([
        'alamat' => $request->alamat,
        'nohp' => $request->nohp,
        'user_id'   => $user->id,
    ]);
  } 
  return redirect('/pekerja');
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
