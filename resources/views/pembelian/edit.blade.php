@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Rubah Pembelian Barang</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('pembelian.update', $pm->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col lg-6">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" value="{{$pm->nama}}" class="form-control @error ('nama') is invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col lg-6">
                    <label for = "harga">Harga</label>
                    <input type="text" name="harga" value="{{$pm->harga}}" class="form-control @error ('harga') is invalid @enderror">
                    @error('harga')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <div class="row">
                    <div class="col lg-4">
                        <div class="form-group">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" name="jumlah" value="{{$pm->jumlah}}" class="form-control @error ('jumlah') is invalid @enderror">
                            @error('jumlah')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col lg-4">
                        <div class="form-group">
                            <label for="barang" class="form-label">Barang</label>
                            <select name="barang_id" id="barang_id" class="form-control">
                                <option value = "{{$b->barang_id}}" selected>{{$b->barang->nama}}</option>
                                @foreach($barang as $b)
                                <option value="{{$b->id}}">{{$b->nama}}</option>
                                @endforeach
                            </select>      
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer mt-3">
                <button class="btn btn-warning" type="submit"><i class="fa fa-save"></i>Update</button>
            </div>  
        </form>
    </div>
</div>




@endsection