<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\product;
use App\Models\order;
use Illuminate\Http\Request;

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
        $store_product = product::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
            $store_product->image = $request->file('image')->getClientOriginalName();
            $store_product->save();
        }

        return redirect()->route('admin.index');
    }

    // public function orderList()
    // {
        
    // }

    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        product::destroy($id);
        return redirect()->route('admin.index');
    }

    public function order()
    {
        return view('admin.orderAdmin');
    }
}
