<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use function GuzzleHttp\Promise\all;

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
        // $input = $request->all();
        // $store_product = product::create($input);

        // if($request->hasFile('image')){
        //     $request->file('image')->store('public/image/', $request->file('image')->getClientOriginalName());
        //     $store_product->image = $request->file('image')->getClientOriginalName();
        //     $store_product->save();
        // }

        // if($store_product->save()){
        //     return redirect()->route('admin.index');
        // }else{
        //     return redirect()->back();
        // }

        $store_product = product::create($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
            $store_product->image = $request->file('image')->getClientOriginalName();
            $store_product->save();
        }

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
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
}
