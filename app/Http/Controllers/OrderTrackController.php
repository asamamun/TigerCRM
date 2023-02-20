<?php

namespace App\Http\Controllers;

use App\Models\Codorder;
use App\Models\CodorderDetail;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderTrackController extends Controller
{
   // public function index(){
   //    $cinfo = Customer::find(session('cid'));
   //    $all_orders = Codorder::where('customer_id',session('cid'))->with('codorderdetails')->get();
      // dd($all_orders); return;
   //    return view('ordertrack.index')->with('customer',$cinfo)->with(compact('all_orders'));
   // }

   public function ordertrack($id){
      $cinfo = Customer::find(session('cid'));
      $codorder = Codorder::where('id',$id)->with(['customer'])->get();
      $codorder_details = CodorderDetail::where('codorder_id',$id)->with(['product','product.productimages'])->get();
      // dd($codorder_details); return;
      return view('ordertrack.index')->with('customer',$cinfo)->with(compact('codorder'))->with(compact('codorder_details'));
   }
}
