@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
<div class="container">
    <div class="card-1 jumbotron grid">
        <div class="row">
            <div class="col-4">
                <img style="max-width: 200px" src="https://www.shutterstock.com/image-vector/realistic-inkjet-printer-vector-design-260nw-1706149966.jpg" alt="Foto Profil">                
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
        {{-- @foreach ($data_product as $dp)
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <div class="my-4 mx-2">
            <h1>{{ $dp->nama_product }}</h1>
            <p>{{ $dp->spesifikasi }}</p>
                <a href="" class="btn btn-primary">beli</a>
            </div>
        @endforeach --}}
        @foreach ($data_product as $dp)
            <div class="card-1 p-3 m-3" style="width: 18rem;">
                <img class="mx-auto d-block" style="max-width: 150px" src="https://www.shutterstock.com/image-vector/realistic-inkjet-printer-vector-design-260nw-1706149966.jpg" alt="Foto Profil">                
                <div class="card-body">
                    <h3 class="m">{{ $dp->nama_product }}</h3>
                    <h5 class="card-text mb-2">{{ $dp->spesifikasi }}</h5>
                    <h6 class="card-text">{{ $dp->harga }}</h6>
                    <a href="{{ route('product.show' , $dp->id) }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        @endforeach
        </div>
</div>
@endsection
