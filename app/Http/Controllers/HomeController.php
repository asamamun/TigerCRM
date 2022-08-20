<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        // dd(session()->all());
        $categories = Category::with('products')->get();
        $brands = Brand::with('products')->get();
        // $allsubcategory = Subcategory::with('category')->get();
        return view('ecommerce.index')->with('categories',$categories)->with('brands',$brands);
        
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    // public function show(Product $product)
    // {
    //     $category = new Category();
    //     $allproducts = Product::where('category_id',$category->id);
    //     // dd($allproducts);
    //     return view('ecommerce.show',compact('allproducts'));
    // }
    
}
