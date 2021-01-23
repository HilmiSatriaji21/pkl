@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Negara
                </div>
                <div class="card-body">
                
                    <form action="{{route('negara.update',$negara->id)}}" method="post">
                        <input type="hidden" nama="_method" value="PUT">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Negara</label>
                            <input type="text" name="kode_negara" value="{{$provinsi->kode_negara}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Negara</label>
                            <input type="text" name="nama_negara" value="{{$provinsi->nama_negara}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
