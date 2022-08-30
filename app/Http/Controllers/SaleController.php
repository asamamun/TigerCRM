<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Models\Account;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pdf;
use Illuminate\Support\Facades\Log;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::pluck('name','id');
        return view('sale.index')->with('accounts',$accounts)->with('user',Auth::user());
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
     * @param  \App\Http\Requests\StoreSaleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaleRequest  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
    public function search(Request $request)
    {
        $searchdata = $request->term;
        $ps = Product::select('id','name')->where('name','LIKE',"%{$searchdata}%")->get();
        $items = [];
        foreach ($ps as $p) {
            $items[] = [
                'label' => $p->name,
                'value' => $p->name,
                'id' => $p->id
            ];
        }
        return response()->json($items);
    }

    public function addtocart(Request $request)
    {
        $id = $request->id;
        $p = Product::find($id);
        // $row = $p->find($id);
        $return_arr = [
            'id' => $p->id,
            'barcode' => $p->barcode,
            'name' => $p->name,
            'price' => $p->price,
        ];

        echo json_encode($return_arr);
    }

    public function customersearch(Request $request)
    {
        $searchdata = $request->term;
        $cs = Customer::select('id','mobile','name')->where('mobile','LIKE',"%{$searchdata}%")->get();
        $items = [];
        foreach ($cs as $c) {
            $items[] = [
                'label' => $c->mobile,
                'value' => $c->id,
                'mobile' => $c->mobile,
                'id' => $c->id,
                'name' => $c->name,
            ];
        }
        return response()->json($items);
    }

    public function placeorder(Request $request)
    {
        DB::beginTransaction();
        try {
            $uid = Auth::id();
            $ord = new Order();
            // $details = new OrderDetail();
            $data = [
                'user_id' => $uid,
                'customer_id' => $request->cid,
                'nettotal' => $request->total,
                'discount' => $request->discount,
                'grandtotal' => $request->gtotal,
                'comment' => $request->comment,
                'payment_type' => $request->pmethod,
                'trxId' => $request->trxid,
            ];
            // return response()->json($data);
            $ord = Order::create($data);
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
                $details = OrderDetail::create($pdata);
                //update quantity in product table
                $pd = Product::find($ids[$key]);
                $pd->quantity = $pd->quantity - $quans[$key];
                if ($pd->quantity >= 0) {
                    $pd->save();
                    //return response()->json(['error'=>0,'message'=>"Order Received"]);
                } else {

                    //return response()->json(['error'=>1,'message'=>"Error"]);
                }
            }
            //balance addition
            $gtotal = $request->gtotal;
            $pa = Account::find($request->pmethod);
            $pa->balance = $pa->balance + $gtotal;
            $pa->save();
            DB::commit();
            return response()->json(['error'=>0,'message'=>"Order received",'orderid'=>$orderID]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['error'=>1,'message'=>"ERROR"]); 
            // abort(404);
        }
               
    }
}
