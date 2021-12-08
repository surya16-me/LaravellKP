@extends('bengkels.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Lihat Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('bengkels.index') }}"> Back</a>
        </div>
    </div>
</div>

//got id from index
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Barang:</strong>
                {{ $bengkel->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga:</strong>
                {{ $bengkel->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah:</strong>
                {{ $bengkel->jumlah }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan:</strong>
                {{ $bengkel->ket }}
            </div>
        </div>
    </div>

@endsection