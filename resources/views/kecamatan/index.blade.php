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
                    Data Kecamatan
                    <a href="{{route('kecamatan.create')}}" class="float-right">
                    <button type="submit" class="btn btn-danger">Tambah Data</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Kode Kecamatan</th>
                                    <th>Nama Kota</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kecamatan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kode_kecamatan}}</td>
                                    <td>{{$data->kota->nama_kota}}</td>
                                    <td>{{$data->nama_kecamatan}}</td>
                                    <td>
                                        <form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-sm btn-success">Lihat</a> 
                                            <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit</a> 
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