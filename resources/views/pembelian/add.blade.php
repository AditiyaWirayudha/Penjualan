@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Pembelian Barang</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('pembelian.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col lg-6">
                    <div class="form-group">
                        <label for="nama">Pembelian Barang</label>
                        <input type="text" name="nama" value="{{old('nama')}}" class="form-control @error ('nama') is invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col lg-6">
                    <label for = "harga">Harga</label>
                    <input type="text" name="harga" value="{{old('harga')}}" class="form-control @error ('harga') is invalid @enderror">
                    @error('harga')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <div class="row">
                    <div class="col lg-4">
                        <div class="form-group">
                            <label for="jumlah" class="form-label">jumlah</label>
                            <input type="number" name="jumlah" value="{{old('jumlah')}}" class="form-control @error ('jumlah') is invalid @enderror">
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
                                <option selected>Pilih...</option>
                                @foreach($barang as $b)
                                <option value="{{$b->id}}">{{$b->nama}}</option>
                                @endforeach
                            </select>      
                        </div>
                    </div>
            <div class="modal-footer mt-3">
                <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>Simpan</button>
            </div>  
        </form>
    </div>
</div>




@endsection