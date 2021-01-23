@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kasus
                </div>
                <div class="card-body">
                    <form action="{{route('kasus.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Jumlah Positif</label>
                            <input type="number" name="jumlah_positif" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Negara</label>
                            <select name="id_negara" class="form-control" required>
                                @foreach($negara as $data)
                                    <option value="{{$data->id}}">{{$data->nama_negara}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="">Jumlah Meninggal</label>
                            <input type="number" name="jumlah_meninggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Sembuh</label>
                            <input type="number" name="jumlah_sembuh" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection