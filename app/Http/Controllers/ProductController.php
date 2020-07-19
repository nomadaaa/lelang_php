<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('id')->first()->paginate();
        $a = 1;
        return view('product.index', compact('product', 'a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
				$category = Category::get();
        return view('product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
				]);
				
				if($request->hasFile('gambar')){
					$file = $request->file('gambar');
					$filename = time() . '.' . $file->getClientOriginalExtension();
					$file->storeAs('public/products', $filename);
				}

				try{
					$product = New Product;
					$product->no_product 	= $request->no_product;
					$product->nama 				= $request->nama;
					$product->stok 				= $request->stok;
					$product->category_id = $request->category_id;
					$product->harga 			= $request->harga;
					$product->gambar 			= $filename;
					$product->save();

					return redirect()->route('product.index')->with(['success' => 'Selamat Data Berhasil disimpan']);

				}catch(\Exception $e){
					return redirect()->route('product.index')->with(['error' => $e->getMessage()]);
				}


				
				// return redirect()->route('product.index')->with(['success' => 'Selamat Data Berhasil disimpan']);

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
