<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Supplier;
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
        $allproduct = Product::with(['brand','supplier','category','subcategory'])->get();
        return view("product.index")
        ->with('allproduct',$allproduct)
        ->with('user',Auth::user());
        // dd($allsubcategory->categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        $brands = Brand::pluck('name','id');
        $suppliers = Supplier::pluck('name','id');
        return view("product.create")
        ->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('brands',$brands)
        ->with('suppliers',$suppliers)
        ->with('user',Auth::user());
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
        $path = $request->file('image')->store('public/products');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $p = new Product();
        $p->name = $request->name;
        $p->barcode = rand(1000000,9999999);
        $p->image = $path;
        $p->feature = $request->feature;
        $p->description = $request->description;
        $p->information = $request->information;
        $p->regular_price = $request->regular_price;
        $p->price = $request->price;
        $p->wholesale_price = $request->wholesale_price;
        $p->purchase_price = $request->purchase_price;
        $p->discount = $request->discount;
        $p->quantity = $request->quantity;

        $b = Brand::find($request->brand_id);
        $s = Supplier::find($request->supplier_id);
        $c = Category::find($request->category_id);
        $sc = Subcategory::find($request->subcategory_id);
        // dd($sc);
        if(($b->products()->save($p)) && ($s->products()->save($p)) && ($c->products()->save($p)) && ($sc->products()->save($p))){
            return back()->with('message','Product ' .$p->id. ' Create Successfully!!!');
        }
        else{
            return back()->with('message','Error!!');
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
        $categories = Category::pluck('name','id');
        $subcategories = Subcategory::pluck('name','id');
        $brands = Brand::pluck('name','id');
        $suppliers = Supplier::pluck('name','id');
        return view('product.edit',compact('product'))
        ->with('categories',$categories)
        ->with('subcategories',$subcategories)
        ->with('brands',$brands)
        ->with('suppliers',$suppliers)
        ->with('user',Auth::user());
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

        if($product->image){
            Storage::delete($product->image);
        }

        $product->name = $request->name;
        $product->brand_id = $request->brand_id;
        $product->supplier_id = $request->supplier_id;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->image = $path;
        $product->feature = $request->feature;
        $product->description = $request->description;
        $product->information = $request->information;
        $product->regular_price = $request->regular_price;
        $product->price = $request->price;
        $product->wholesale_price = $request->wholesale_price;
        $product->purchase_price = $request->purchase_price;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;

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
