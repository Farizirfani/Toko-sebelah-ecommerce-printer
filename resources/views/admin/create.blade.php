@extends('utilities.sidebar')

@section('title' , 'Admin')

{{-- content --}}
@section('content-admin')
    <div class="container">
        <div class="card-1 m-4 p-4">
            <form method="POST" action="{{ url('admin') }}">
                @csrf
                @method("POST")
                <div class="mb-3">
                    <label class="form-label">Nama Product</label>
                    <input type="text" name="nama_product" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Spesifikasi Product</label>
                    <input type="text" name="spesifikasi" class="form-control" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">kuantitas</label>
                    <input type="number" name="kuantitas" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection