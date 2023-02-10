<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\codorder;
use App\Models\CodorderDetail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('subcategories','products')->has('products')->get();
        $brands = Brand::with('products')->has('products')->get();
        $products = Product::with('productimages')->orderBy('id','desc')->paginate(9);
        // dd($products->productimages);
        return view('shop.index', compact('products'))->with(compact('categories'))->with(compact('brands'));
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
        $categories = Category::with('subcategories','products')->has('products')->get();
        $product = Product::where('slug',$slug)->first();
       return view('shop.details',compact('product'))->with(compact('categories'));
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
        $categories = Category::with('subcategories','products')->has('products')->get();
        $items = \Cart::session(session('cid'))->getContent();
        // dd($items);
        return view('cart.index')->with('items',$items)->with(compact('categories'));
    }

    public function addToCart($id) // by this function we add product of choose in card
    {       
        // dd(session('cid'));
        // $product = Product::find($id);
        // with productsimages
        $product = Product::with('productimages')->find($id);
        // dd($product->productimages->first()->name);
        if(!$product) {
            abort(404);
        }
        \Cart::session(session('cid'))->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->productimages->first()->name,
            // 'attributes' => array(),
        ));
        // dd(\Cart::getContent());
        return redirect()->back()->with('message', 'Product added to cart successfully!');
    }
    public function removeFromCart($id){
        \Cart::session(session('cid'))->remove($id);
        return redirect()->back()->with('message', 'Product remove from cart successfully!');
        // return response()->json(['id'=>$id,'message'=>"Item Removed"]);
    }

    public function placeorder(Request $request)
    {
        DB::beginTransaction();
        try{
            $ord = new codorder();
            // $details = new OrderDetail();
            $data = [
                'order_number' => 'TE-'. session('cid') .rand(100000,999999),
                'customer_id' => session('cid'),
                'address' => $request->address,
                'subtotal' => $request->subtotal,
                'shipping' => $request->shipping,
                'total' => $request->total,
                'payment_type' => 'Cash on Delivery',
                'delivery_status' => 'Pending',
            ];
            // Log::info($data);
            // return;
            $ord = codorder::create($data);
            $orderID = $ord->id;
            $ids = $request->ids;
            $quans = $request->quantity;
            $pprice = $request->pricearr;
            $ptotal = $request->totalarr;
            $i = 0;
            $data = [];
            foreach($ids as $id){
                $pdata = [
                    'codorder_id' => $orderID,
                    'product_id' => $ids[$i],
                    'quantity' => $quans[$i],
                    'price' => $pprice[$i],
                    'total' => $ptotal[$i],
                ];
                // Log::info($pdata);
                CodorderDetail::create($pdata);
                // update quantity in product table
                $pd = Product::find($ids[$i]);
                $pd->quantity = $pd->quantity - $quans[$i];
                if ($pd->quantity >= 0) {
                    $pd->save();
                }
                $i++;
            }
            \Cart::session(session('cid'))->clear();
            DB::commit();
            return response()->json(['error'=>0,'message'=>"Order Placed Successfully"]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['error'=>1,'message'=>"ERROR"]); 
        }
    }
}
