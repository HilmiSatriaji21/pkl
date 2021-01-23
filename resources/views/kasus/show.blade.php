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
                        <input type="text" name="jumlah_positif" value="{{$kasus->jumlah_positif}}" 
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Asal Negara</label>
                        <input type="text" name="id_negara" class="form-control" value="{{$kasus->rw->nama_negara}}" readonly>
                    </div>
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Jumlah Meninggal</b></label>
                        <input type="text" name="jumlah_meninggal" value="{{$kasus->jumlah_meninggal}}" 
                        class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
                    </div>
                    <div class="mb-12>
                        <label for="exampleInputEmail1" class="form-label"><b>Jumlah Sembuh</b></label>
                        <input type="text" name="jumlah_sembuh" value="{{$kasus->jumlah_sembuh}}" 
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