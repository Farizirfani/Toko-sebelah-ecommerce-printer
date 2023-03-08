@extends('utilities.sidebar')

@section('title' , 'Admin')

{{-- content --}}
@section('content-admin')
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success m-3" role="alert">
                {{ $message }}
            </div>
        @elseif ($message = Session::get('delete'))
            <div class="alert alert-danger m-3" role="alert">
                {{ $message }}
            </div>
        @elseif ($message = Session::get('update'))
            <div class="alert alert-info m-3" role="alert">
                {{ $message }}
            </div>
        @endif
        <div class="card-1 m-4 p-3">
            <h3 class="text-center">Product</h3>
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nama Produdt</th>
                        <th>Image</th>
                        <th>spesifikasi</th>
                        <th>harga</th>
                        <th>kuantitas</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data_product as $dp)
                    <tr class="text-center">
                        <th class="text-center">{{ $no++ }}</th>
                        <td class="text-center">{{ $dp->nama_product }}</td>
                        <td class="text-center">
                            <img style="max-width: 80px" src="{{ asset('images/'.$dp->image) }}" alt="Foto Product">
                        </td>
                        <td class="text-center">{{ $dp->spesifikasi }}</td>
                        <td class="text-center">Rp. {{ number_format($dp->harga) }}</td>
                        <td class="text-center">{{ $dp->kuantitas }}</td>
                        <td class="tex-center">
                            <div class="d-flex justify-content-center">
                                <form action="" class="m-1">
                                    <a href="{{ route('admin.edit', $dp->id) }}" class="btn btn-warning" href="">Edit</a>
                                </form>
                                <form action="{{ route('admin.destroy', $dp->id) }}" method="POST" class="m-1">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endsection