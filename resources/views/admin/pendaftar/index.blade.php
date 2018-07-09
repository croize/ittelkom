@extends('layouts.utama')

@section('css')
<link href="{{url('assets/css/helper.css')}}" rel="stylesheet">
<link href="{{url('assets/css/style.css')}}" rel="stylesheet">
@endsection

@section('js')
<script src="{{url('assets/js/lib/datatables/datatables.min.js')}}"></script>
<script src="{{url('assets/js/lib/datatables/datatables-init.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title">Data Pendaftar</h4>
              <div class="table-responsive m-t-40">
                  <table id="myTable" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Pendaftar</th>
                              <th>Jenis Kelamin</th>
                              <th>Prodi</th>
                              <th>Nomor Siswa</th>
                              <th>Email</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $cu)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$cu->nama}}</td>
                          <td>{{$cu->jk}}</td>
                          <td>{{$cu->prodi->jenjang['jenis']}} - {{$cu->prodi['nama_prodi']}}</td>
                          <td>{{$cu->nomor_siswa}}</td>
                          <td>{{$cu->email}}</td>
                          <td> <a href="/admin/pendaftar/{{$cu->id}}" class="btn btn-primary"> <i class="fa fa-eye"></i> </a><a href="/admin/pendaftar/delete/{{$cu->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
