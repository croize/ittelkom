<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;

class PendaftarController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index()
    {
      $data = Siswa::all();
      return view('admin.pendaftar.index',compact('data'));
    }
    public function view($id)
    {
      $data = Siswa::find($id);
      return view('admin.pendaftar.view',compact('data'));
    }
    public function delete($id)
    {
      $da = Siswa::find($id);
      Storage::delete('public/siswa/'.$da->image);
      $da->delete();
      return redirect('pendaftar');
    }
}
