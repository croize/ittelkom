<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\User;
use App\Prodi;
use App\Jenjang;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
      $siswa = Siswa::all()->count();
      $user = User::all()->count();
      $prodi = Prodi::all()->count();
      $jenjang = Jenjang::all()->count();
      return view('admin.home',compact('siswa','user','prodi','jenjang'));
    }
}
