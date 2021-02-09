@extends('layouts.master2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <hr><b><center><h3> ホームヤード </h3></center></b>
                    <hr>
                    <b><center>~ 著作権2021 ~</center></b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
