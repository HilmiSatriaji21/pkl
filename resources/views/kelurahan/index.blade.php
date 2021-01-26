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
                    Data Kelurahan
                    <a href="{{route('kelurahan.create')}}" class="float-right">
                    <button type="submit" class="btn btn-danger">Tambah Data</button></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Kecamatan</th>
                                    <th>Nama Kelurahan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kelurahan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kecamatan->nama_kecamatan}}</td>
                                    <td>{{$data->nama_kelurahan}}</td>
                                    <td>
                                        <form action="{{route('kelurahan.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kelurahan.show',$data->id)}}" class="btn btn-sm btn-success">Lihat</a> 
                                            <a href="{{route('kelurahan.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit</a> 
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