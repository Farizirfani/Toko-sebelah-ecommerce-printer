@extends('utilities.sidebar')

@section('title' , 'Admin')

@section('content-admin')
    <div class="container">
        <div class="card-1 m-4 p-3">
            <form method="POST" action="{{ route('admin.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label class="form-label">Nama Product</label>
                    <input type="text" name="nama_product" value="{{ $product->nama_product }}" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Tambah Foto</label>
                    <input type="file" name="image" value="{{ $product->image }}" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Spesifikasi Product</label>
                    <input type="text" name="spesifikasi" value="{{ $product->spesifikasi }}" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" value="{{ $product->harga }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">kuantitas</label>
                    <input type="number" name="kuantitas" value="{{ $product->kuantitas }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection