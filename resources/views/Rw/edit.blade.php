@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Rw</div>

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
                    
                    <form action="{{ route('rw.update', $rw->id)}}" method="POST" >
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="">Asal Kelurahan</label>
                            <select name="id_kelurahan" class="form-control" required>
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}"
                                    {{$data->id == $rw->id_kelurahan ? "selected":""}}>{{$data->nama_kelurahan}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Nama Rw</label>
                          <input type="text" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
