@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
    <div class="container">
        <div class="card-1 p-3">
            <h1>{{ $show_product->nama_product }}</h1>
        </div>
    </div>
@endsection