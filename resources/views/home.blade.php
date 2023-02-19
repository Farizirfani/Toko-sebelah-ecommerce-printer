@extends('layouts.app')

@section('title', 'home')

@include('utilities.navbar')

@section('content')
<div class="container">
    <div class="card-1 jumbotron grid">
        <div class="row">
            <div class="col-4">
                <img style="max-width: 200px" src="https://www.shutterstock.com/image-vector/realistic-inkjet-printer-vector-design-260nw-1706149966.jpg" alt="Foto Profil">                
            </div>
            <div class="col-6">
                <h1 class="font-bold">Selamat Datang!</h1>
                <p>Ini adalah halaman web saya.</p>
            </div>
        </div>
    </div>
    <div class="card-1 color-1">
        <h1 class="primary text-center p-2">Printer All brand</h1>
    </div>
    <div class="row justify-content-around">
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <h1>ini printer</h1>
            <p>test</p>
            <a href="http://" class="btn btn-primary">beli</a>

        </div>
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <h1>ini printer</h1>
            <p>test</p>
            <a href="http://" class="btn btn-primary">beli</a>
        </div>
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <h1>ini printer</h1>
            <p>test</p>
            <a href="http://" class="btn btn-primary">beli</a>
        </div>
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <h1>ini printer</h1>
            <p>test</p>
            <a href="http://" class="btn btn-primary">beli</a>
        </div>
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <h1>ini printer</h1>
            <p>test</p>
            <a href="http://" class="btn btn-primary">beli</a>
        </div>
        <div class="card-1 p-3 m-3" style="width: 30%;">
            <h1>ini printer</h1>
            <p>test</p>
            <a href="http://" class="btn btn-primary">beli</a>
        </div>
    </div>
</div>
@endsection
