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
        $data_order = Order::where('user_id', '=', Auth::user()->id)->get();
        return view('user.order', compact('data_order') );
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
        $harga = $product->harga;

        if ($recentQty < 0) {
            return redirect()->back()->with('error', 'Maaf Stok tidak mencukupi');
        }
        $product->kuantitas = $recentQty;
        $product->update();

        $order = new Order(); 
        $order->product_id = $request->input('product_id');
        $order->user_id = Auth::user()->id;
        $order->jumlah_order = $request->input('jumlah_order');
        $order->harga = $harga;
        $order->status = 'proses';
        $order->total = $harga * $request->jumlah_order;

        $order->save();

        return redirect('/order');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $product = Order::find($id);
        $product = Order::find($id);
        $product->update($request->all());

        return redirect('/adminOrder');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        product::destroy($id);
        return redirect()->route('user.order');
    }
}
