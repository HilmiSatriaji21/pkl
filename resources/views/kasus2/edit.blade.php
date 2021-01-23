@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kasus</div>

                <div class="card-body">
                    
                    <form action="{{ route('kasus2.update', $kasus2->id)}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jumlah Positif</label>
                          <input type="text" name="positif" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Rw</label>
                            <select name="id_rw" class="form-control" required>
                                @foreach($rw as $data)
                                <option value="{{$data->id}}"
                                    {{$data->id == $kasus2->id_rw ? "selected":""}}>{{$data->nama_rw}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jumlah Meninggal</label>
                          <input type="text" name="meninggal" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Jumlah Sembuh</label>
                          <input type="text" name="sembuh" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" 
                          aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Data</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
