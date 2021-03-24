<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use Alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::where('status', 1)->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banners = Banner::where('status', 1)->get();
        return view('admin.banners.create', compact('banners'));
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
            $img_path = 'uploads/banners/' . $filename;    
            
            Image::make($data['image'])->resize(500,500)->save($img_path);
            $data['image'] = $filename;
        }
        
        $banner = Banner::create($data);

        alert()->success('Success', 'Banner added successfully!');
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
        $product = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banners'));
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
        $banner = Banner::findOrFail($id);
        
        # Image Code
        if($request->hasFile('image')){
            $extension = $request->image->getClientOriginalExtension();
            $filename = date('mdYHis') . uniqid() . '.' . $extension;
            $img_path = 'uploads/products/' . $filename;    
            
            Image::make($data['image'])->resize(500,500)->save($img_path);
            $data['image'] = $filename;
        }
        
        $banner->update($data);

        alert()->success('Success', 'Banner updated successfully!');
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
        $banner = Banner::findOrFail($id);
        if($banner){
            $banner->delete();
        }

        alert()->success('Success', 'Banner deleted successfully!')->persistent(true);
        return redirect()->back();
    }
}
