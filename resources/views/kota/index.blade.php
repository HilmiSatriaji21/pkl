@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4><mark style="background-color: orange">Data Kota</mark></h4>
                    <a href="{{route('kota.create')}}" class="float-right">
                    <button type="submit" class="btn btn-danger">Tambah Data <i class="fa fa-plus-square"></button></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                            <tr class="bg-black">
                            <th scope="col"><center>Nomor</center></th>
                                    <th><center>Nama Provinsi</th>
                                    <th><center>Kode Kota</th>
                                    <th><center>Nama Kota</th>
                                    <th><center>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($kota as $data)
                                <tr>
                                    <td><center><b>{{$no++}}</td>
                                    <td><center><b>{{$data->provinsi->nama_provinsi}}</td>
                                    <td><center><b>{{$data->kode_kota}}</td>
                                    <td><center><b>{{$data->nama_kota}}</td>
                                    <td>
                                        <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <center><a href="{{route('kota.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit<i class="fa fa-cog fa-spin"></a></i>
                                            <a href="{{route('kota.show',$data->id)}}" class="btn btn-sm btn-success">Show<i class="fa fa-eye"></a></i>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus<i class="fa fa-trash-alt"></i>
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