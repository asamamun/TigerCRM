<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;

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
        //https://github.com/darryldecode/laravelshoppingcart
        $items = \Cart::session(session('cid'))->getContent();
        // dd($items);
        return view('cart.index')->with('items',$items);
    }

    public function addToCart($id) // by this function we add product of choose in card
    {
 /*        \Cart::session(session('cid'))->remove($id);
        return; */
        
        $product = Product::find($id);
        if(!$product) {

            abort(404);

        }
        \Cart::session(session('cid'))->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,            
        ));        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function removeFromCart($id){
        \Cart::session(session('cid'))->remove($id);
        return response()->json(['id'=>$id,'message'=>"Item Removed"]);
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
