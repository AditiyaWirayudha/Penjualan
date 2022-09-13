@extends('layout.app')

@section('title')
    Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Pembeli</h5>
        </div>
    </div>

    <div class="card-body">
        <form action="{{ route('pembeli.store')}}" method="POST">
            @csrf

            <div class="row">
                <div class="col lg-6">
                    <div class="form-group">
                        <label for="nama">Nama Pembeli</label>
                        <input type="text" name="nama" value="{{old('nama')}}" class="form-control @error ('nama') is invalid @enderror">
                        @error('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col lg-6">
                    <label for = "nama">Telepon</label>
                    <input type="text" name="telepon" value="{{old('telepon')}}" class="form-control @error ('telepon') is invalid @enderror">
                    @error('harga')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                </div>

                <div class="row">
                    <div class="col lg-4">
                        <div class="form-group">
                            <label for="stock" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control @error ('alamat') is invalid @enderror">
                            @error('stok')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
            <div class="modal-footer mt-3">
                <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>Simpan</button>
            </div>  
        </form>
    </div>
</div>




@endsection