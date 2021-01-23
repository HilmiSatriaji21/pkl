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
                    <a href="{{route('kasus.create')}}" class="float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Jumlah Positif</th>
                                    <th>Jumlah Meninggal</th>
                                    <th>Jumlah Sembuh</th>
                                    <th>Nama Negara</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kasus as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->jumlah_positif}}</td>
                                    <td>{{$data->jumlah_meninggal}}</td>
                                    <td>{{$data->jumlah_sembuh}}</td>
                                    <td>{{$data->negara->nama_negara}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>
                                        <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kasus.show',$data->id)}}" class="btn btn-sm btn-success">Lihat</a> 
                                            <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit</a> 
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