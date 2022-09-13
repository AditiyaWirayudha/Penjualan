@extends('layout.app')

@section('title')
    Kategori 
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Kategori</h5>
            <div class="modal-body">
                    <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="{{$kategori->nama}}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                        @error ('nama')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                      </div>
                    </div>
            
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            
                  </form>
        </div>
    </div>
</div>

@endsection