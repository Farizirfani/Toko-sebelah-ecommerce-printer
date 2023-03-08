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
        //
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

        $order_id = $request->order_id;
        $order = Order::where('id', $order_id)->first();

        $total_harga = $order->total;
        $uang_bayar = $request->input('uang_bayar');

        if ( $uang_bayar >=  $total_harga) {
            $noPesanan = substr(uniqid(), 0, 10);
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->no_pesanan = $noPesanan;
            $transaksi->uang_bayar = $uang_bayar;
            $transaksi->alamat = $request->input('alamat');
            $transaksi->nama = $request->input('nama');
            $transaksi->payment = $request->input('payment');

            $order->delete();

            $transaksi->save();

            return redirect('/home');
        }else{
            return redirect()->back();
        }
        
        return redirect('/home')->with('transaksi', 'transaksi berhasil, barang segera dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data_transaksi = transaksi::all();
        $data_order = order::find($id);
        return view('user.transaksi', compact('data_order', 'data_transaksi'));
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
