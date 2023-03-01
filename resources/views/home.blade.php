@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
<div class="container">
    <div class="card-1 jumbotron grid">
        <div class="row">
            <div class="col-4">
                <img style="max-width: 200px; border-radius: 15px;" src="https://www.shutterstock.com/image-vector/realistic-inkjet-printer-vector-design-260nw-1706149966.jpg" alt="Foto Profil">                
            </div>
            <div class="col-6">
                <h1 class="font-bold">Selamat Datang!</h1>
                <p>Ini adalah halaman web saya.</p>
            </div>
        </div>
    </div>
    <div class="card-1 color-1">
        <h1 class="primary text-center p-2">Printer All brand</h1>
    </div>
    <div class="row justify-content-around">
        @foreach ($data_product as $dp)
            <div class="card-1 p-3 m-3" style="width: 18rem;">
                <img class="mb-3 mt-1" style="max-width: 150px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/'.$dp->image) }}" alt="Foto Product">          
                <div class="card-body">
                    <h3 class="m">{{ $dp->nama_product }}</h3>
                    <h5 class="card-text mb-2">{{ $dp->spesifikasi }}</h5>
                    <h6 class="card-text">{{ number_format($dp->harga) }}</h6>
                    <a href="{{ route('product.show' , $dp->id) }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        @endforeach
        </div>
</div>
@endsection
