@extends('bengkels.layout')
@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bengkels.create') }}"> Tambah Data Bengkel</a>
            </div>
        </div>
</div>
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
@endif

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Barang</th>@
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Keterangan</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach ($bengkels as $bengkel)
    <tr>
      <th scope="row">{{ $bengkel->id }}</th>
      <td>{{ $bengkel->nama }}</td>
      <td>{{ $bengkel->harga }}</td>
      <td>{{ $bengkel->jumlah }}</td>
      <td>{{ $bengkel->ket }}</td>
      <td>
      <form action="{{ route('bengkels.destroy',$bengkel->id) }}" method="POST">
        
        <a class="btn btn-info" href="{{ route('bengkels.show',$bengkel->id) }}">Show</a>        

        <a class="btn btn-primary" href="{{ route('bengkels.edit',$bengkel->id) }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
@endforeach
  </tbody>
</table>

{{ $bengkels->links() }}

@endsection
