<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderTrackController extends Controller
{
 public function index(){
    $cinfo = Customer::find(session('cid'));
    return view('ordertrack.index')->with('customer',$cinfo);
 }
}
