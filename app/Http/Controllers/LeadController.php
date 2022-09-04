<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function purchaselead(){
        // $invoice = Invoice::where('supplier_id',);
        $supplier = Supplier::with('invoices')->get();
        // dd($supplier);
        return view('lead.purchase',compact('supplier'))->with('user',Auth::user());

    }

    public function salelead(){

        return view('lead.sale');

    }

}
