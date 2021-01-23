@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Rw</div>

                <div class="card-body">
                    
                    <form action="{{ route('rw.update', $rw->id)}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Rw</label>
                          <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text" required=""></div>
                        </div>

                        <div class="form-group">
                            <label for="">Asal Kelurahan</label>
                            <select name="id_kelurahan" class="form-control" required>
                                @foreach($kelurahan $data)
                                <option value="{{$data->id}}"
                                    {{$data->id == $rw->id_kelurahan ? "selected":""}}>{{$data->nama_kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
