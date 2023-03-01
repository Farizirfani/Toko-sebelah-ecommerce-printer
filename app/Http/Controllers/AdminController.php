<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_product = product::all();
        return view('admin.index', compact('data_product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();  

        $request->image->move(public_path('images'), $imageName);

        $product = new Product;
        $product->nama_product = $request->nama_product;
        $product->spesifikasi = $request->spesifikasi;
        $product->harga = $request->harga;
        $product->kuantitas = $request->kuantitas;
        $product->image = $imageName;
        $product->save();

        return redirect()->route('admin.index')->with('success', 'Product created successfully!');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->nama_product = $request->nama_product;
        $product->spesifikasi = $request->spesifikasi;
        $product->harga = $request->harga;
        $product->kuantitas = $request->kuantitas;
        $product->save();

        return redirect('/admin')->with('success', 'Product updated successfully!');
    }


    public function destroy($id)
    {
        product::destroy($id);
        return redirect()->route('admin.index');
    }

    public function order()
    {
        $data_order = Order::all();
        return view('admin.orderAdmin', compact('data_order'));
    }
}
