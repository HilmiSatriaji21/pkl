@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Kecamatan') }}</div>

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
                            
                    <form action="{{ route('kecamatan.store')}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="">Asal Kota</label>
                            <select name="id_kota" class="form-control" required>
                                @foreach($kota as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kota}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Nama Kecamatan</label>
                          <input type="text" name="nama_kecamatan"  class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Data</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection