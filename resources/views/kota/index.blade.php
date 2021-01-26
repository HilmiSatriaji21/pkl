@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    Data Provinsi
                    <a href="{{route('kota.create')}}" class="float-right">
                    <button type="submit" class="btn btn-danger">Tambah Data</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Kota</th>
                                    <th>Nama Provinsi</th>
                                    <th>Nama Kota</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kota as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_kota}}</td>
                                    <td>{{$data->provinsi->nama_provinsi}}</td>
                                    <td>{{$data->nama_kota}}</td>
                                    <td>
                                        <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kota.show',$data->id)}}" class="btn btn-sm btn-success">Lihat</a> 
                                            <a href="{{route('kota.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit</a> 
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete ?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection