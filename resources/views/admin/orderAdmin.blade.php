@extends('utilities.sidebar')

@section('title' , 'Admin')

{{-- content --}}
@section('content-admin')
    <div class="container">
        <div class="card-1 p-3 m-4">
            <table class="table table-hover">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Pembeli</th>
                        <th>Nama Product</th>
                        <th>Image</th>
                        <th>harga</th>
                        <th>kuantitas</th>
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
                        <td class="text-center">Rp. {{ number_format($do->harga) }}</td>
                        <td class="text-center">{{ $do->order->kuantitas }}</td>
                        <td class="tex-center">
                            <div class="d-flex justify-content-center">
                                {{-- <form action="{{ route('admin.orderStatus') }}" method="POST" class="m-1">
                                    @method('PUT')
                                    @csrf
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option selected value="{{ $do->status }}">{{ $do->status }}</option>
                                        <option value="konfirmasi">Konfirmasi</option>
                                        <option value="cancel">cancel</option>
                                    </select>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form> --}}



            <form method="POST" action="{{ route('admin.update', $do->id) }}" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <select name="status" class="form-select" aria-label="Default select example" >
                    <option selected value="{{ $do->status }}">{{ $do->status }}</option>
                    <option value="konfirmasi">Konfirmasi</option>
                    <option value="cancel">cancel</option>
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
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