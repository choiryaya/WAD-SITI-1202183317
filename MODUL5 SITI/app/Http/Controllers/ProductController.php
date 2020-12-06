<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.product',compact('products')); //masukin data dari product ke halaman
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //nyimpan data ke database
    {
        // dd($request);
        //nyimpen ke project
        $file = $request->file('image');
        $path = public_path().'/images';
        $file->move($path, $file->getClientOriginalName());
        $filename_data = "images/".$file->getClientOriginalName();

        //set variable product
        $product = new Product();
        $product->name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $filename_data;

        $product->save();
        //balik ke halaman product.index
        return redirect()->route('product.index');
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
        
        $product = Product::findorfail($id); //ngambil satu data yang dipilih berdasarkan id
        return view('product.edit',compact('product'));
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
        $product = Product::findorfail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path().'/images';
            $file->move($path, $file->getClientOriginalName()); 
            $filename_data = "images/".$file->getClientOriginalName();
        }else{
            $filename_data = $product->img_path;
        }
        // dd($request);
        $product->name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->img_path = $filename_data;
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //delete
    {
        $product = Product::findorfail($id);
        $product->delete();

        return redirect()->back();
    }
}
