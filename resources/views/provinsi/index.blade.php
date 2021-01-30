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
                    <a href="{{route('provinsi.create')}}" class="float-right">
                    <button type="submit" class="btn btn-danger">Tambah Data <i class="fa fa-plus"></button></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                            <tr class="bg-black">
                            <th scope="col"><center>Nomor</center></th>
                                    <th scope="col"><center>Kode Provinsi</center></th>
                                    <th scope="col"><center>Nama Negara</center></th>
                                    <th scope="col"><center>Aksi</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach($provinsi as $data)
                                <tr>
                                    <td><center><b>{{$no++}}</center></td>
                                    <td><center><b>{{$data->kode_provinsi}}</center></td>
                                    <td><center><b>{{$data->nama_provinsi}}</center></td>
                                    <td>
                                        <form action="{{route('provinsi.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <a href="{{route('provinsi.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit<i class="fa fa-edit"></a></i>
                                            <a href="{{route('provinsi.show',$data->id)}}" class="btn btn-sm btn-success">Show<i class="fa fa-eye"></a></i>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')"><i class="fa fa-trash-alt"></i>
                                                Hapus
                                            </button>
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