<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproduct = Product::all();
        return view('product.index',compact('allproduct'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("product.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //upload
        $path = $request->file('icon')->store('public/products');
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
            'barcode'=>rand(100000000000,999999999999),
            'image'=>$path,
            'feature'=>$request->feature,
            'description'=>$request->description,
            'information'=>$request->information,
            'regular_price'=>$request->regular_price,
            'price'=>$request->price,
            'wholesale_price'=>$request->wholesale_price,
            'purchase_price'=>$request->purchase_price,
            'discount'=>$request->discount,

        ];
        // dd($data);
        $p = Product::create($data);
        if($p){
            return back()->with('message','Product ' .$p->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //upload
        $path = $request->file('icon')->store('public/products');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(600, 600);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $product->name = $request->name;
        $product->image = $path;
        $product->feature = $request->feature;
        $product->description = $request->description;
        $product->information = $request->information;
        $product->regular_price = $request->regular_price;
        $product->price = $request->price;
        $product->wholesale_price = $request->wholesale_price;
        $product->purchase_price = $request->purchase_price;
        $product->purchase_price = $request->purchase_price;
        $product->discount = $request->discount;

        if($product->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(Product::destroy($product->id)){
            return back()->with('message',$product->id. ' Deleted!!!!');
        }
    }
}
