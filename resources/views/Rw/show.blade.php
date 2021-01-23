@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data rw') }}</div>

                <div class="card-body">
                   <div class="form-group">
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Nama rw</b></label>
                        <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" 
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Asal Rw</label>
                        <input type="text" name="id_rw" class="form-control" value="{{$rw->kelurahan->nama_kelurahan}}" readonly>
                    </div>

                     </div>
                     <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection