<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function purchaselead(){
        //SELECT supplier_id, sum(`nettotal`) as total FROM `invoices` WHERE 1 group by `supplier_id` order by total desc;
        /* $invoice = Invoice::with('supplier')->get();
        $invoice = $invoice->groupBy('supplier_id'); */
        $invoice = Invoice::with('supplier')
    ->selectRaw("supplier_id, SUM(grandtotal) as total")    
    ->groupBy('supplier_id')
    ->orderBy('total','desc')
    ->get();
        // dd($invoice);

        // $supplier = Supplier::with('invoices')->groupBy('id')->get();
        // dd($supplier);
        return view('lead.purchase',compact('invoice'))->with('user',Auth::user());

    }

    public function salelead(){

        return view('lead.sale');

    }

}
