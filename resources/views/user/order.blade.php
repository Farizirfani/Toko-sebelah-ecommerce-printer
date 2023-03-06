@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
<div class="container">
    {{-- <div class="card-1 p-3">
        <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Image</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Kuantitas</th>
                        <th>Status</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data_order as $do)
                    <tr class="text-center justify-content-center" style="height: 150px;">
                        <th>{{ $no++ }}</th>
                        <td>
                            <img style="max-width: 100px" src="{{ asset('images/'.$do->order->image) }}" alt="Foto Product">
                        </td>
                        <td>{{ $do->order->nama_product }}</td>
                        <td>Rp. {{ number_format($do->order->harga) }}</td>
                        <td>{{ $do->jumlah_order }}</td>
                        <td>
                            @if($do->status == 'proses')
                                <h5><span class="badge bg-secondary w-10">Menunggu Konfirmasi</span></h5>
                                @elseif($do->status == 'cancel')
                                <h5><span class="badge bg-danger w-10">cancel</span></h5>
                            @else
                                <h5><span class="badge bg-primary">Konfirmasi</span></h5>
                            @endif
                        </td>
                        <td>Rp. {{ number_format($do->total) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{ $do->id }}">
                <div class="text-end" style="margin-right:30px">
                    @if ( $do->status == 'konfirmasi')
                        <button type="submit" class="btn btn-primary">Check Out</button>
                    @else
                        <button type="button" class="btn btn-secondary" disabled>Check Out</button>
                    @endif
                </div>
            </form>
    </div> --}}
    <div class="row justify-content-around">
        @foreach ($data_order as $do)
        <div class="card-1 p-3 m-3" style="width: 20rem;">
                <img class="mb-3 mt-1" style="max-width: 150px; display: block; margin-left: auto; margin-right: auto;" src="{{ asset('images/'.$do->order->image) }}" alt="Foto Product">          
                <div class="card-body">
                    <h3 class="m">{{ $do->order->nama_product }}</h3>
                    <h5 class="card-text mb-2">Spesifikasi : {{ $do->order->spesifikasi }}</h5>
                    <h5 class="card-text">Harga : Rp. {{ number_format($do->order->harga) }}</h5>
                    <h5>Jumlah Order : {{ $do->jumlah_order }}</h5>
                    <h5>Total Harga : Rp. {{ number_format($do->total) }}</h5>
                    <h5>
                        @if($do->status == 'proses')
                                Status Pemesanan : <span class="badge bg-secondary w-10">Proses</span>
                                @elseif($do->status == 'cancel')
                                Status Pemesanan : <span class="badge bg-danger w-10">cancel</span>
                            @else
                                Status Pemesanan : <span class="badge bg-primary">Konfirmasi</span>
                            @endif
                    </h5>
                    {{-- <form action="{{ route('transaksi.') }}" method="POST">
                        @csrf --}}
                        <div class="text-start">
                            @if ( $do->status == 'konfirmasi')
                                {{-- <button type="submit" class="btn btn-primary">Check Out</button> --}}
                                <a href="{{ route('transaksi.show' , $do->id) }}" class="btn btn-primary">Check Out</a>
                            @else
                                <button type="button" class="btn btn-secondary" disabled>Check Out</button>
                            @endif
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection