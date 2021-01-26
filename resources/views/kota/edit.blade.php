@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kota</div>

                <div class="card-body">
                {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                    
                    <form action="{{ route('kota.update', $kota->id)}}" method="POST" >
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Kota</label>
                          <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text" required=""></div>
                        </div>

                        <div class="form-group">
                            <label for="">Asal Provinsi</label>
                            <select name="id_provinsi" class="form-control" required>
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}"
                                    {{$data->id == $kota->id_provinsi ? "selected":""}}>{{$data->nama_provinsi}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Nama kota</label>
                          <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
