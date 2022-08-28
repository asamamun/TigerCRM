<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::with('products')->has('products')->get();
        $brands = Brand::with('products')->has('products')->get();
        $recentproducts = Product::orderBy('id','desc')->take('8')->get();
        // dd($recentproducts);
        return view('ecommerce.index')->with('categories',$categories)->with('brands',$brands)->with('recentproducts',$recentproducts);
        
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function category($s)
    {
        
        $category = Category::where('slug',$s)->with('products','subcategories')->paginate(9);
        // dd($category);
        return view('ecommerce.category')->with('category',$category[0]);
    }

    public function brand($s)
    {
        
        $brands = Brand::where('slug',$s)->with('products')->paginate(9);
        // dd($brands);
        return view('ecommerce.brand')->with('brands',$brands[0]);
    }
    
}
