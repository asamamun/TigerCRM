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

    public function show($s)
    {
        
        $category = Category::where('slug',$s)->with('products','subcategories')->get();
        // dd($category);
        return view('ecommerce.show')->with('category',$category[0]);
    }
    
}
