@extends('utilities.sidebar')

@section('title' , 'Admin')

{{-- content --}}
@section('content-admin')
    <div class="container">
        <div class="card-1 p-3 m-4">
            <table class="table table-hover">
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
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Pembeli</th>
                        <th>Nama Product</th>
                        <th>Image</th>
                        <th>jumlah orderan</th>
                        <th>harga</th>
                        <th>total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data_order as $do)
                    <tr class="text-center">
                        <th class="text-center">{{ $no++ }}</th>
                        <td class="text-center">null</td>
                        <td class="text-center">{{ $do->order->nama_product }}</td>
                        <td class="text-center">
                            <img style="max-width: 80px" src="{{ asset('images/'.$do->order->image) }}" alt="Foto Product">
                        </td>
                        <td class="text-center">{{ $do->jumlah_order }}</td>
                        <td class="text-center">Rp. {{ number_format($do->harga) }}</td>
                        <td class="text-center">Rp. {{ number_format($do->total) }}</td>
                        <td class="tex-center">
                            <div class="d-flex justify-content-center">
                                <form method="POST" action="{{ route('order.update', $do->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="d-flex justify-content-center">
                                        <select name="status" class="form-select w-50" aria-label="Default select example" >
                                            <option selected value="{{ $do->status }}">{{ $do->status }}</option>
                                            <option value="proses">Proses</option>
                                            <option value="konfirmasi">Konfirmasi</option>
                                            <option value="cancel">cancel</option>
                                        </select>
                                        <div style="margin-left: 5px;">
                                            <button type="submit" class="btn btn-success">change</button>
                                        </div>
                                    </div>
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