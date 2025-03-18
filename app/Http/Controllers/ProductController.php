<?php

namespace App\Http\Controllers;

use App\Models\api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'string| required',
            'harga' => 'integer|required',
            'gambar' => 'image| nullable',
        ]);
        Product::create([
            'nama' => $request->nama,
            'gambar' => 'null',
            'harga' =>  $request->harga,
        ]);
        return request()->json([
            'Message' => $request->validate()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
