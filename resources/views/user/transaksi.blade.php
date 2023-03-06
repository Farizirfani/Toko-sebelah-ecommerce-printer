@extends('layouts.app')

@section('title', 'home')

@section('content') 
    <div class="container d-flex justify-content-center ">
        <div class="card-1 p-4  w-50">
            <h1>{{ $data_order->order->nama_product }}</h1>
            <h2>Pemesanan atas nama : {{ $data_order->user->name }}</h2>
            <h1>Rp. {{ number_format($data_order->total) }}</h1>
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <input type="hidden"  name="order_id" value="{{ $data_order->id }}">
                <input type="hidden"  name="nama" value="{{ $data_order->user->name }}">
                <div class="w-75 m-auto justify-content-center text-center">
                    <label for="alamat" class="form-label text-start">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="my-3 d-flex justify-content-center">
                    <select name="payment" class="form-select w-75" aria-label="Default select example" >
                        <option selected >Payment</option>
                        <option value="BCA">BCA</option>
                        <option value="BRI">BRI</option>
                        <option value="MANDIRI">MANDIRI</option>
                        <option value="BTN">BTN</option>
                        <option value="BSI">BSI</option>
                    </select>
                </div>
                <button type="submit" class="mt-2 btn btn-primary">Order</button>
            </form>
        </div>
    </div>
@endsection