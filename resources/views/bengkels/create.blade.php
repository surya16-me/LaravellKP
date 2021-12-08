@extends('bengkels.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Input Data bengkel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('bengkels.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('bengkels.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="topic">Nama Barang</label>
    <input type="text" class="form-control"  placeholder="Input Nama Barang" name ="nama">
  </div>
  <div class="form-group">
    <label for="description">Harga</label>
    <input class="form-control" placeholer ="Input Harga" name="harga"></input>
  </div>
  <div class="form-group">
    <label for="categorie">Jumlah</label>
    <input type="text" class="form-control"  placeholder="Input Jumlah Barang" name ="jumlah">
  </div>
  <div class="form-group">
    <label for="categorie">Keterangan</label>
    <input type="text" class="form-control"  placeholder="Input Keterangan Barang" name ="ket">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection