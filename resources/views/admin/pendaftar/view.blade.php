@extends('layouts.utama')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Detail Pendaftar</h4>
              <div class="row">
                <div class="col-4">
                  <img src="{{url('/storage/siswa')}}/{{$data->image}}" class="img-responsive" alt="">
                </div>
                <div class="col-8">
                  <div class="row">
                    <div class="col-12">
                      Data Siswa
                      <hr>
                    </div>
                    <div class="col-4">
                      <b>Nama Siswa</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->nama}}
                    </div>
                    <div class="col-4">
                      <b>Jenis Kelamin</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> @if($data->jk == "L") Laki-Laki @elseif($data->jk == "P")Perempuan @endif
                    </div>
                    <div class="col-4">
                      <b>Alamat Siswa</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->alamat}}
                    </div>
                    <div class="col-4">
                      <b>Nomor Handphone</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->nomor_siswa}}
                    </div>
                    <div class="col-4">
                      <b>Email</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->email}}
                    </div>
                    <div class="col-4">
                      <b>Prodi</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->prodi->jenjang['jenis']}} - {{$data->prodi['nama_prodi']}}
                    </div>
                    <div class="col-12">
                      <hr>
                    </div>
                    <div class="col-12">
                      Data Orang Tua (Ayah)
                      <hr>
                    </div>
                    <div class="col-4">
                      <b>Nama</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->nama_ayah}}
                    </div>
                    <div class="col-4">
                      <b>Nomor Handphone</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->nomor_ayah}}
                    </div>
                    <div class="col-4">
                      <b>Alamat</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->alamat_ayah}}
                    </div>
                    <div class="col-12">
                      <hr>
                    </div>
                    <div class="col-12">
                      Data Orang Tua (Ibu)
                      <hr>
                    </div>
                    <div class="col-4">
                      <b>Nama</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->nama_ibu}}
                    </div>
                    <div class="col-4">
                      <b>Nomor Handphone</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->nomor_ibu}}
                    </div>
                    <div class="col-4">
                      <b>Alamat</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> {{$data->alamat_ibu}}
                    </div>
                    <div class="col-12">
                      <hr>
                    </div>
                    <div class="col-12">
                      Data Wali
                      <hr>
                    </div>
                    <div class="col-4">
                      <b>Nama</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> @if($data->nama_wali == NULL) - @else {{$data->nama_wali}} @endif
                    </div>
                    <div class="col-4">
                      <b>Nomor Handphone</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> @if($data->nomor_wali == NULL) - @else {{$data->nomor_wali}} @endif
                    </div>
                    <div class="col-4">
                      <b>Alamat</b>
                    </div>
                    <div class="col-8">
                      <b>:</b> @if($data->alamat_wali == NULL) - @else {{$data->alamat_wali}} @endif
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
