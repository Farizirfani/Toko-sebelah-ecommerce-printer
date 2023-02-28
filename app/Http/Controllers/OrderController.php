<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_order = order::all();
        return view('user.order', compact('data_order') );

        // $data_order = order::where('user_id', '=', Auth::user()->id);
        // return view('user.order', compact('data_order') );
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

        $product = Product::find($request->input('product_id'));
        $recentQty = $product->kuantitas - $request->input('jumlah_order');
        if ($recentQty < 0) {
            return redirect()->back()->with('error', 'Maaf Stok tidak mencukupi');
        }
        $product->kuantitas = $recentQty;
        $product->update();

        $order = new Order(); 
        $order->product_id = $request->input('product_id');
        $order->user_id = Auth::user()->id;
        $order->jumlah_order = $request->input('jumlah_order');
        $order->harga = $request->input('harga');
        $order->status = '0';
        $order->total = ($request->harga * $request->jumlah_order);

        $order->save();

        return redirect('/order');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
