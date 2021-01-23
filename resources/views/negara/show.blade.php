@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Show Data Negara
                </div>
                <div class="card-body">
                
                    <div class="form-group">
                        <label for="">Kode Provinsi</label>
                        <input type="text" name="kode_negara" value="{{$provinsi->kode_negara}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Provinsi</label>
                        <input type="text" name="nama_negara" value="{{$provinsi->nama_negara}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
