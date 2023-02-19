@extends('utilities.sidebar')

@section('title' , 'Admin')

{{-- content --}}
@section('content-admin')
    <div class="container">
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
                    <tr class="text-center">
                        <th class="text-center">{{ $no++ }}</th>
                        <td class="text-center">test</td>
                        <td class="text-center">
                            <img style="max-width: 100px" src="https://www.shutterstock.com/image-vector/realistic-inkjet-printer-vector-design-260nw-1706149966.jpg" alt="Foto Profil">
                        </td>
                        <td class="text-center"> Ini spesifikasi</td>
                        <td class="text-center"> 5000000</td>
                        <td class="text-center"> 1 </td>
                        <td class="tex-center">
                            <div class="d-flex justify-content-center">
                                <form action="" class="m-1">
                                    <a class="btn btn-warning" href="">Edit</a>
                                </form>
                                <form action="" method="POST" class="m-1">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </table>
        </div>
    </div>
@endsection