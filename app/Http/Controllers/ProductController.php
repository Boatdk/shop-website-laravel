<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_code' => 'required',
            'product_type' => 'required',
            'product_color' => 'required',
            'product_brand' => 'required',
            'product_size' => 'required',
            'product_volume' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',

        ]);

        $product = new Products([
            'code' => $request->get('product_code'),
            'name' => $request->get('product_name'),
            'type' => $request->get('product_type'),
            'color' => $request->get('product_color'),
            'brand' => $request->get('product_brand'),
            'size' => $request->get('product_size'),
            'volume' => $request->get('product_volume'),
            'price' => $request->get('product_price'),
            'image' => $request->get('product_image'),
        ]);
        $product->save();
        return redirect()->route('pages.product')->with('success', 'Data added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
