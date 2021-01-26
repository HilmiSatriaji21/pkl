@extends('layouts.master2')

@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                
                    <h4>Tambah Data</h4>
                </div>
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
                    
                    <form action="{{ route('provinsi.store')}}" method="POST">
                    @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kode Provinsi</label>
                            <input type="text" name="kode_provinsi" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text" ></div>
                            </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Provinsi</label>
                            <input type="text" name="nama_provinsi" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                        </div>
                    </div>            
                </div>
            </div>
        </div>
    </body>
</html>
@endsection