<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Http\Requests\StorePurchaseRequest;
use App\Http\Requests\UpdatePurchaseRequest;
use App\Models\Account;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::pluck('name','id');
        return view('purchase.index')->with('accounts',$accounts)->with('user',Auth::user());
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
     * @param  \App\Http\Requests\StorePurchaseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchaseRequest  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseRequest $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        //
    }

    public function suppliersearch(Request $request)
    {
        $searchdata = $request->term;
        $ss = Supplier::select('id','mobile','name')->where('mobile','LIKE',"%{$searchdata}%")->get();
        $items = [];
        foreach ($ss as $s) {
            $items[] = [
                'label' => $s->mobile,
                'value' => $s->id,
                'mobile' => $s->mobile,
                'id' => $s->id,
                'name' => $s->name,
            ];
        }
        return response()->json($items);
    }
    public function orderplace(Request $request)
    {
        
        $inv = new Invoice();
        // $details = new OrderDetail();
        $data = [
            'supplier_id' => $request->sid,
            'nettotal' => $request->total,
            'discount' => $request->discount,
            'grandtotal' => $request->gtotal,
            'comment' => $request->comment,
            'payment_type' => $request->pmethod,
            'trxId' => $request->trxid,
        ];
        // return response()->json($data);
        $inv = Invoice::create($data);
        $invoiceID = $inv->id;
        $ids = $request->ids;
        $quans = $request->quantity;
        $pprice = $request->pricearr;
        $ptotal = $request->totalarr;
        foreach ($ids as $key => $value) {
            $details = new InvoiceDetail();
            $pdata = [
                'invoice_id' => $invoiceID,
                'product_id' => $ids[$key],
                'quantity' => $quans[$key],
                'price' => $pprice[$key],
                'total' => $ptotal[$key],
            ];
            $details->save($pdata);
            //update quantity in product table
            $pd = Product::find($ids[$key]);
            $pd->quantity = $pd->quantity + $quans[$key];
            $pd->save();
        }
        //balance addition
        $gtotal = $request->gtotal;
        $pa = Account::find($request->pmethod);
        $pa->balance = $pa->balance - $gtotal;
        if($pa->balance >= 0){
            $pa->save();
        } else{

        }

        return response()->json(['error'=>0,'message'=>"Purchase done"]);
    }
}
