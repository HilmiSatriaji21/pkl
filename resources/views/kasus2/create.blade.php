@extends('layouts.master2')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kasus
                </div>
                <div class="card-body">
                    <form action="{{route('kasus2.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Jumlah Positif</label>
                            <input type="number" name="positif" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Rw</label>
                            <select name="id_rw" class="form-control" required>
                                @foreach($rw as $data)
                                    <option value="{{$data->id}}">{{$data->nama_rw}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="">Jumlah Meninggal</label>
                            <input type="number" name="meninggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Sembuh</label>
                            <input type="number" name="sembuh" class="form-control" required>
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
@endsection