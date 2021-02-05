@extends('layouts.master2')
@section('css')
<!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        @if (session('message'))
                <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message') }}
                </div>
            @elseif(session('message1'))
                <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message1') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header"><h4><mark style="background-color: orange">Data Laporan</mark></h4>
                <a href="{{route('laporan.create')}}" class="float-right btn btn-danger">Tambah Data <i class="fa fa-plus-square"></button></i></a>
            </div>

            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr class="bg-black">
                                            <th scope="col"><center>Nomor</center></th>
                                            <th scope="col"><center>Lokasi</center></th>
                                            <th scope="col"><center>Rw</center></th>
                                            <th scope="col"><center>Positif</center></th>
                                            <th scope="col"><center>Sembuh</center></th>
                                            <th scope="col"><center>Meninggal</center></th>
                                            <th scope="col"><center>Tanggal</center></th>
                                            <th scope="col"><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php $no=1;
                                    @endphp
                                    @foreach($laporan as $data)

                                        <tr>
                                            <th scope="row"><center><b>{{$no++}}</center></th>
                                            <td><center><b>Kelurahan : {{$data->rw->kelurahan->nama_kelurahan}}<br>
                                            Kecamatan : {{$data->rw->kelurahan->kecamatan->nama_kecamatan}}<br>
                                            Kota : {{$data->rw->kelurahan->kecamatan->kota->nama_kota}}<br>
                                            Provinsi : {{$data->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}</center></td>
                                            <td><center><b>{{$data->rw->nama_rw}}</center></td>
                                            <td><center><b>{{$data->positif}}</center></td>
                                            <td><center><b>{{$data->sembuh}}</center></td>
                                            <td><center><b>{{$data->meninggal}}</center></td>
                                            <td><center><b>{{$data->tanggal}}</center></td>
                                            <td>
                                            <form action="{{route('laporan.destroy',$data->id)}}"  method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <center>
                                            <a href="{{route('laporan.edit',$data->id)}}" class="btn btn-sm btn-warning">Edit<i class="fa fa-cog fa-spin"></a></i>
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus<i class="fa fa-trash-alt"></i>
                                            </form>
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
</div>
@endsection
