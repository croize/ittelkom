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
              <h4 class="card-title">Data Prodi</h4>
              <h6 class="card-subtitle">Data Jenjang Pendidikan</h6>
              <a href="/admin/jenjang/create" class="btn btn-primary"> <i class="fa fa-plus"></i> Create </a>
              <div class="table-responsive m-t-40">
                  <table id="" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Jenjang Pendidikan</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($datajenjang as $cu)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$cu->jenis}}</td>
                          <td> <a href="/admin/jenjang/edit/{{$cu->id}}" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> <a href="/admin/jenjang/delete/{{$cu->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
      <div class="card">
          <div class="card-body">
              <h6 class="card-subtitle">Data Prodi</h6>
              <a href="/admin/prodi/create" class="btn btn-primary"> <i class="fa fa-plus"></i> Create </a>
              <div class="table-responsive m-t-40">
                  <table id="myTable" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Jenjang Pendidikan</th>
                              <th>Jurusan</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($dataprodi as $cu)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$cu->jenjang['jenis']}}</td>
                          <td>{{$cu->nama_prodi}}</td>
                          <td> <a href="/admin/prodi/edit/{{$cu->id}}" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a> <a href="/admin/prodi/delete/{{$cu->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a> </td>
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
