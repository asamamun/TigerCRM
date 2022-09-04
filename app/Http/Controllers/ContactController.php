<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $categories = Category::with('subcategories','products')->has('products')->get();
        return view('contact.index')->with(compact('categories'));
    }
}
