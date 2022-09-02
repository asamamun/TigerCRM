<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('productimages')->paginate(9);
        // dd($products->productimages);
        return view('shop.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
        $product = Product::where('slug',$slug)->first();
/*         foreach($product->productimages as $img){
            echo $img->name."<br>";
        } */
       return view('shop.details',compact('product'));
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cart(){
        return view('cart.index');
    }

    public function addToCart($id) // by this function we add product of choose in card
    {
        $product = Product::find($id);
        // dd($product);

        if(!$product) {

            abort(404);

        }
        // what is Session:
        //Sessions are used to store information about the user across the requests.
        // Laravel provides various drivers like file, cookie, apc, array, Memcached, Redis, and database to handle session data. 
        // so cause write the below code in controller and tis code is fix
        $cart = session()->get('cart');  

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        // "photo" => $product->productimages->first()->name
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart); // this code put product of choose in cart

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            // "photo" => $product->photo
        ];

        session()->put('cart', $cart); // this code put product of choose in cart

        return redirect()->back()->with('success', 'Product added to cart successfully!');
        // dd($cart);
    }

    // update product of choose in cart
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    // delete or remove product of choose in cart
    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

}
