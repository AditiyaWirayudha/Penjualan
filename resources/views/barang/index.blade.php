@extends('layout.app')

@section('title')
    Barang
@endsection    

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Barang</h5>

            <a class="btn btn-success btn-sm float-end" href="{{ route ('barang.create')}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Supplier</th>
                <th>Kategori</th>
                <th>aksi</th>
        </thead>
        <tbody>
           @foreach($barang as $item)
           <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->stok}}</td>
                <td>{{$item->suplier->nama}}</td>
                <td>{{$item->kategori->nama}}</td>
                <td>
                    <a href="/barang/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                    <a href="/barang/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection   