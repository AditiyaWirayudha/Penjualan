@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
<div class="container text-center">
  <div class="row g-2">
    <div class="col-6 text-light">
      <div class="p-3 border bg-info mt-3">Barang <i class="fa-solid fa-boxes-stacked"></i> </div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-warning mt-3">Kategori <i class="fa-solid fa-tags"></i> </div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-success mt-3">Suplier <i class="fa-solid fa-truck-fast"></i> </div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-danger mt-3">Member <i class="fa-solid fa-people-group"></i></div>
    </div>
  </div>
</div>
@endsection