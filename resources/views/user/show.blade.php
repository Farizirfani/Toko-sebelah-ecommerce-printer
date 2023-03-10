@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
    <div class="container">
        <div class="card-1 p-3">
            <div class="row">
                <div class="col">
                    <img style="max-width: 350px" src="{{ asset('images/'.$show_product->image) }}" alt="Foto Product">
                </div>  
                <div class="col mt-4 mb-2">
                    <h1>{{ $show_product->nama_product }}</h1>
                    <h3>Spesifikasi : {{ $show_product->spesifikasi }}</h3>
                    <h3>Harga : Rp. {{ $show_product->harga }}</h3>
                    <h3>kuantitas : {{ $show_product->kuantitas }}</h3>

                    <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $show_product->id }}">
                    <tr>
                        <td>Jumlah Pesanan</td>
                        <td>:</td>
                        <div class="input-group text-center mb-3" style="width: 180px">
                            <input type="number" min="1" name="jumlah_order" class="form-control qty-input text-center">
                        </div>
                    </tr>
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger w-75 p-2" role="alert">
                            <h5 class="text-center">{{ $message }}</h5>
                        </div>
                    @endif
                    <tr>
                        <td>
                            <button type="submit" class="mt-2 btn btn-primary">Order</button>
                        </td>
                    </tr>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection