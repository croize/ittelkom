@extends('layouts.utama')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Jenjang Pendidikan</h4>

            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="/admin/prodi/store" method="post">
                      {{csrf_field()}}
                      <div class="form-group">
                          <p class="text-muted m-b-15 f-s-12">Jenis Jenjang</p>
                          <select class="form-control input-default" name="jenjang_id">
                            <option value="">Pilih Jenjang</option>
                            @foreach($datajenjang as $jen)
                            <option value="{{$jen->id}}">{{$jen->jenis}}</option>
                            @endforeach
                          </select>
                      </div>
                        <div class="form-group">
                            <p class="text-muted m-b-15 f-s-12">Nama Prodi</p>
                            <input type="text" class="form-control input-default " placeholder="Nama Prodi" name="nama_prodi">
                        </div>
                        <input type="submit" name="" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
