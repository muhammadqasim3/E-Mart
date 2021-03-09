<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Product;
use App\Category;
use Alert;

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
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        # Image Code
        if($request->hasFile('image')){
            $extension = $request->image->getClientOriginalExtension();
            $filename = date('mdYHis') . uniqid() . '.' . $extension;
            $img_path = 'uploads/products/' . $filename;    
            
            Image::make($data['image'])->resize(500,500)->save($img_path);
            $data['image'] = $filename;
        }
        
        $product = Product::create($data);

        $product->categories()->sync($product); 
        alert()->success('Success', 'Product added successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('detail page');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
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
        $data = $request->all();
        $product = Product::findOrFail($id);
        
        # Image Code
        if($request->hasFile('image')){
            $extension = $request->image->getClientOriginalExtension();
            $filename = date('mdYHis') . uniqid() . '.' . $extension;
            $img_path = 'uploads/products/' . $filename;    
            
            Image::make($data['image'])->resize(500,500)->save($img_path);
            $data['image'] = $filename;
        }
        
        $product = $product->update($data);

        $product->categories()->sync($product); 

        alert()->success('Success', 'Product updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if($product){
            $product->delete();
        }

        alert()->success('Success', 'Product deleted successfully!')->persistent(true);
        return redirect()->back();
    }

}
