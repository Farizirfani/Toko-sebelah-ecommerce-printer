@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
    <div class="container">
        <div class="card-1 p-3">
            <div class="row">
                <div class="col">
                    <img style="max-width: 350px" src="{{ asset('image/'.$show_product->image) }}" alt="Foto Product">
                </div>  
                <div class="col mt-4 mb-2">
                    <h1>{{ $show_product->nama_product }}</h1>
                    <h3>Spesifikasi : {{ $show_product->spesifikasi }}</h3>
                    <h3>Harga : Rp. {{ $show_product->harga }}</h3>
                    <h3>kuantitas : {{ $show_product->kuantitas }}</h3>
                </div>
            </div>
            
        </div>
    </div>
@endsection