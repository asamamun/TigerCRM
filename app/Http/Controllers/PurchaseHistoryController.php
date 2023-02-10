<?php

namespace App\Http\Controllers;

use App\Models\PurchaseHistory;
use App\Http\Requests\StorePurchaseHistoryRequest;
use App\Http\Requests\UpdatePurchaseHistoryRequest;
use App\Models\Category;
use App\Models\Codorder;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('subcategories','products')->has('products')->get();
        $cinfo = Customer::find(session('cid'));
        $codorders = Codorder::where('customer_id',session('cid'))->orderBy('id','desc')->get();
        return view('purchasehistory.index')->with('customer',$cinfo)->with(compact('categories'))->with(compact('codorders'));
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
     * @param  \App\Http\Requests\StorePurchaseHistoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePurchaseHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PurchaseHistory  $purchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseHistory $purchaseHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PurchaseHistory  $purchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseHistory $purchaseHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePurchaseHistoryRequest  $request
     * @param  \App\Models\PurchaseHistory  $purchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePurchaseHistoryRequest $request, PurchaseHistory $purchaseHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PurchaseHistory  $purchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseHistory $purchaseHistory)
    {
        //
    }

    public function ordercancel(Request $request)
    {
        $codorder = Codorder::find($request->order_id);
        $codorder->delivery_status = 'Cancelled';
        $codorder->save();
        return response()->json([
            'success' => 'Order Cancelled Successfully'
        ]);
    }
}
