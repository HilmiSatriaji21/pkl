@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kasus') }}</div>

                <div class="card-body">
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Jumlah Positif</b></label>
                        <input type="text" name="positif" value="{{$kasus2->positif}}" 
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Asal Rw</label>
                        <input type="text" name="id_rw" class="form-control" value="{{$kasus2->rw->nama_rw}}" readonly>
                    </div>
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Jumlah Meninggal</b></label>
                        <input type="text" name="meninggal" value="{{$kasus2->meninggal}}" 
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Jumlah Sembuh</b></label>
                        <input type="text" name="sembuh" value="{{$kasus2->sembuh}}" 
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp" readonly>
                          <div id="emailHelp" class="form-text"></div>
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