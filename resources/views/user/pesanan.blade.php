@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')    
    <div class="container">
        <div class="card-1 p-3 m-3">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nama Pemesan</th>
                        <th>Nomer Pesanan</th>
                        <th>Alamat Pemesan</th>
                        <th>payment</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data_transaksi as $dt)
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $dt->nama }}</td>
                        <td>{{ $dt->no_pesanan }}</td>
                        <td>{{ $dt->alamat }}</td>
                        <td>{{ $dt->payment }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection