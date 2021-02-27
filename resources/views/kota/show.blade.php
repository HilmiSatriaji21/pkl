@extends('layouts.master2')

@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            Form Lihat Data Kota
        </div>
        <div class="card-body">
                <div class="row">
                    @foreach ($kota as $data)
                    <div class="form-group col-lg-6">
                        <label for="nama_provinsi" class="control-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" id="nama_provinsi" value="{{$data->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="kode_kota" class="control-label">Kode Kota</label>
                        <input type="text" name="kode_kota" id="kode_kota" value="{{$data->kode_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kota" class="control-label">Nama Kota</label>
                        <input type="text" name="nama_kota" id="nama_kota" value="{{$data->nama_kota}}" class="form-control" readonly>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <a href="{{url()->previous()}}" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection