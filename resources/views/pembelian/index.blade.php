@extends('layout.app')

@section('title')
    Pembelian
@endsection    

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Pembelian</h5>
            <a class="btn btn-success btn-sm float-end" href="{{ route ('pembelian.create')}}"><i class="fa fa-plus"></i></a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th style="width: 5%">No.</th>
                <th style="width: 30%">Jumlah</th>
                <th>Harga</th>
                <th>Barang_id</th>
                <th style="width: 10%">aksi</th>
        </thead>
        <tbody>
           @foreach($pembelian as $item)
           <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->barang_id}}</td>
                <td>
                    <a href="/pembelian/{{$item->id}}/edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                    <a href="/pembelian/{{$item->id}}/hapus" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash"></i></a>
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