<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function purchaselead(){
        $invoice = Invoice::with('supplier')->get();
        $invoice = $invoice->groupBy('supplier_id');
        dd($invoice);

        // $supplier = Supplier::with('invoices')->groupBy('id')->get();
        // dd($supplier);
        return view('lead.purchase',compact('invoice'))->with('user',Auth::user());

    }

    public function salelead(){

        return view('lead.sale');

    }

}
