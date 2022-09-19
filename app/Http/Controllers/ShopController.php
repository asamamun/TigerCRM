<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\codorder;
use App\Models\CodorderDetails;
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
        $product = Product::find($id);
        // dd($product);
        if(!$product) {
            abort(404);
        }
        \Cart::session(session('cid'))->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
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
        $ord = new codorder();
            // $details = new OrderDetail();
            $data = [
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
            // return response()->json($data);
            $ord = codorder::create($data);
            $orderID = $ord->id;
            // Log::info($orderID);
            $ids = $request->ids;
            $quans = $request->quantity;
            $pprice = $request->pricearr;
            $ptotal = $request->totalarr;
            foreach ($ids as $key => $value) {
                //$details = new OrderDetail();
                $pdata = [
                    'order_id' => $orderID,
                    'product_id' => $ids[$key],
                    'quantity' => $quans[$key],
                    'price' => $pprice[$key],
                    'total' => $ptotal[$key],
                ];
                // Log::info($pdata);
                $details = CodorderDetails::create($pdata);
                //update quantity in product table
                $pd = Product::find($ids[$key]);
                $pd->quantity = $pd->quantity - $quans[$key];
                if ($pd->quantity >= 0) {
                    $pd->save();
                    return response()->json(['error'=>0,'message'=>"product minus done"]);
                } else {

                    return response()->json(['error'=>1,'message'=>"Error"]);
                }
            }
            //balance addition
            // $gtotal = $request->gtotal;
            // $pa = Account::find($request->pmethod);
            // $pa->balance = $pa->balance + $gtotal;
            // $pa->save();
            \Cart::session(session('cid'))->clear();
            DB::commit();
            return response()->json(['error'=>0,'message'=>"Order received",'orderid'=>$orderID]);

        /* DB::beginTransaction();
        try {
            $ord = new codorder();
            // $details = new OrderDetail();
            $data = [
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
            // return response()->json($data);
            $ord = codorder::create($data);
            $orderID = $ord->id;
            // Log::info($orderID);
            $ids = $request->ids;
            $quans = $request->quantity;
            $pprice = $request->pricearr;
            $ptotal = $request->totalarr;
            foreach ($ids as $key => $value) {
                //$details = new OrderDetail();
                $pdata = [
                    'order_id' => $orderID,
                    'product_id' => $ids[$key],
                    'quantity' => $quans[$key],
                    'price' => $pprice[$key],
                    'total' => $ptotal[$key],
                ];
                // Log::info($pdata);
                $details = CodorderDetails::create($pdata);
                //update quantity in product table
                $pd = Product::find($ids[$key]);
                $pd->quantity = $pd->quantity - $quans[$key];
                if ($pd->quantity >= 0) {
                    $pd->save();
                    return response()->json(['error'=>0,'message'=>"product minus done"]);
                } else {

                    return response()->json(['error'=>1,'message'=>"Error"]);
                }
            }
            //balance addition
            // $gtotal = $request->gtotal;
            // $pa = Account::find($request->pmethod);
            // $pa->balance = $pa->balance + $gtotal;
            // $pa->save();
            \Cart::session(session('cid'))->clear();
            DB::commit();
            return response()->json(['error'=>0,'message'=>"Order received",'orderid'=>$orderID]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['error'=>1,'message'=>"ERROR"]); 
            // abort(404);
        } */
               
    }

}
