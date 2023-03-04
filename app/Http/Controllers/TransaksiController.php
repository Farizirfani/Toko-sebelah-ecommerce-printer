<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.transaksi');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data_order = Order::where('user_id', '=', Auth::user()->id)->get();
        $order = order::all();

        dd($data_order);

        $noPesanan = substr(uniqid(), 0, 10);
        $transaksi = new Transaksi();
        $transaksi->order_id = $request->order_id;
        $transaksi->user_id = Auth::user()->id;
        $transaksi->no_pesanan = $noPesanan;
        $transaksi->alamat = $request->input('alamat');
        $transaksi->pembayaran = $request->input('pembayaran') - 

        $transaksi->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
