<?php

namespace App\Http\Controllers\Mahasiswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Siswa;
use App\Prodi;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Prodi::all();
        return view('pendaftaran',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $as = new Siswa();
      $as->nama = $request->firstname.' '.$request->lastname;
      if ($request->hasFile('image')) {

        $nameimage = $request->image->getClientOriginalName();
        $request->image->storeAs('public/siswa',$nameimage);
        $as->image = $nameimage;
      }
      $as->jk = $request->jk;
      $as->alamat = $request->alamat;
      $as->nomor_siswa = $request->nomor_siswa;
      $as->email = $request->email;
      $as->nama_ayah = $request->nama_ayah;
      $as->nomor_ayah = $request->nomor_ayah;
      $as->alamat_ayah = $request->alamat_ayah;
      $as->nomor_ibu = $request->nomor_ibu;
      $as->alamat_ibu = $request->alamat_ibu;
      $as->nama_ibu = $request->nama_ibu;
      $as->nama_wali = $request->nama_wali;
      $as->alamat_wali = $request->alamat_wali;
      $as->nomor_wali = $request->nomor_wali;
      $as->jurusan_id = $request->jurusan_id;
      $as->save();
      return redirect('pendaftaran');
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
