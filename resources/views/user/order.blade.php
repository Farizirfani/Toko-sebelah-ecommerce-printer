@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
<div class="container">
    <div class="card-1 p-3">
        <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Image</th>
                        <th>Nama Produk</th>
                        {{-- <th>Spesifikasi</th> --}}
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
                        {{-- <td>{{ $do->order->spesifikasi }}</td> --}}
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
            <div class="text-end" style="margin-right:30px">
                {{-- @if ( $do->status == 'proses')
                    <button type="button" class="btn btn-secondary" disabled>Check Out</button>
                    @elseif( $do->status == 'cancel')
                    <button type="button" class="btn btn-secondary" disabled>Check Out</button>
                    @else
                    <form action="{{ route('order.store') }}" method="post">
                        <button type="button" class="btn btn-primary">Check Out</button>
                    </form>
                @endif --}}

                @if ( $do->status == 'konfirmasi')
                    <button type="button" class="btn btn-primary">Check Out</button>
                @else
                    <button type="button" class="btn btn-secondary" disabled>Check Out</button>
                @endif
            </div>
    </div>
</div>
@endsection