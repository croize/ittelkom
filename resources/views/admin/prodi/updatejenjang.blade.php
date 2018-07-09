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
                    <form action="/admin/jenjang/update/{{$datajenjang->id}}" method="post">
                      {{csrf_field()}}
                      <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <p class="text-muted m-b-15 f-s-12">Jenis Jenjang</p>
                            <input type="text" class="form-control input-default " value="{{$datajenjang->jenis}}" placeholder="Jenjang" name="jenis">
                        </div>
                        <input type="submit" name="" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
