<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenjang;
use App\Prodi;

class ProdiController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
      $datajenjang = Jenjang::all();
      $dataprodi = Prodi::all();
      return view('admin.prodi.index',compact('datajenjang','dataprodi'));
    }
    public function createjenjang()
    {
      return view('admin.prodi.createjenjang');
    }
    public function createprodi()
    {
      $datajenjang = Jenjang::all();
      return view('admin.prodi.createprodi',compact('datajenjang'));
    }
    public function storejenjang(Request $request)
    {
      $data = new Jenjang();
      $data->jenis = $request->jenis;
      $data->save();
      return redirect('admin/prodi');
    }
    public function storeprodi(Request $request)
    {
      $data = new Prodi();
      $data->nama_prodi = $request->nama_prodi;
      $data->jenjang_id = $request->jenjang_id;
      $data->save();
      return redirect('admin/prodi');
    }
    public function editjenjang($id)
    {
      $datajenjang = Jenjang::find($id);
      return view('admin.prodi.updatejenjang',compact('datajenjang'));
    }
    public function editprodi($id)
    {
      $dataprodi = Prodi::find($id);
      $datajenjang = Jenjang::all();
      return view('admin.prodi.updateprodi',compact('datajenjang','dataprodi'));
    }
    public function updatejenjang(Request $request,$id)
    {
      $data = Jenjang::find($id);
      $data->jenis = $request->jenis;
      $data->save();
      return redirect('admin/prodi');
    }
    public function updateprodi(Request $request,$id)
    {
      $data = Prodi::find($id);
      $data->nama_prodi = $request->nama_prodi;
      $data->jenjang_id = $request->jenjang_id;
      $data->save();
      return redirect('admin/prodi');
    }
    public function destroyjenjang($id)
    {
      $jenjang = Jenjang::find($id);
      $jenjang->delete();
      return redirect('admin/prodi');
    }
    public function destroyprodi($id)
    {
      $prodi = Prodi::find($id);
      $prodi->delete();
      return redirect('admin/prodi');
    }
}
