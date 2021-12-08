@extends('bengkels.layout')
   
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Data Bengkel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('bengkels.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check your fields.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

//got id from index
<form action="{{ route('bengkels.update',$bengkel->id) }}" method="POST">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="topic">Nama Barang</label>
    <input type="text" class="form-control" value="{{ $bengkel->nama }}" placeholder="Input Nama" name ="nama">
  </div>
  <div class="form-group">
    <label for="description">Harga</label>
    <input type="text" class="form-control" value="{{ $bengkel->harga }}" placeholder="Input Harga" name ="harga">
  </div>
  <div class="form-group">
    <label for="categorie">Jumlah</label>
    <input type="text" class="form-control" value="{{ $bengkel->jumlah }}" placeholder="Input Jumlah Barang" name ="jumlah">
  </div>
  <div class="form-group">
    <label for="categorie">Keterangan</label>
    <input type="text" class="form-control"  value="{{ $bengkel->ket }}" placeholder="Input Keterangan Barang" name ="ket">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection