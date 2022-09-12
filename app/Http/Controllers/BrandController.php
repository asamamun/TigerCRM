<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use PDF;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allbrand = Brand::all();
        return view('brand.index',compact('allbrand'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("brand.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        //upload
        $path = $request->file('icon')->store('public/brands');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $data = [
            'name'=>$request->name,
            'icon'=>$path,
            'description'=>$request->description,
        ];
        // dd($data);
        $b = Brand::create($data);
        if($b){
            return back()->with('message','Brand ' .$b->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brnd)
    {
        return view('brand.show',compact('brnd'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brnd)
    {
        return view('brand.edit',compact('brnd'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request, Brand $brnd)
    {
        //upload
        $path = $request->file('icon')->store('public/brands');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);


        if($brnd->icon){
            Storage::delete($brnd->icon);
        }

        $brnd->name = $request->name;
        $brnd->icon = $path;
        $brnd->description = $request->description;

        if($brnd->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brnd)
    {
        if(Brand::destroy($brnd->slug)){
            return back()->with('message',$brnd->slug. ' Deleted!!!!');
        }
    }
    public function export_brand_pdf()
    {
        $allbrand = Brand::get();
        $pdf = PDF::loadView('brand.pdf',compact('allbrand'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('Brandlist.pdf');
    }

    public function trashed()
    {
        $allbrand = Brand::onlyTrashed()->get();
        return view('brand.trashed',compact('allbrand'))->with('user',Auth::user());
    }

    public function trashedRestore($id){
        $brand = Brand::onlyTrashed()->findOrFail($id);
        $brand->restore();
        return back();
    }

    public function trashedDelete($id){
        $brand = Brand::onlyTrashed()->findOrFail($id);
        $brand->forceDelete();
        return back();
    }
}
