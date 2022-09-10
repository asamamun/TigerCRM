<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

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

        $orders = Order::with('customer')
        ->selectRaw("customer_id, SUM(grandtotal) as total")    
        ->groupBy('customer_id')
        ->orderBy('total','desc')
        ->get();
        return view('lead.sale',compact('orders'))->with('user',Auth::user());
    }

    public function export_purchase_lead_pdf()
    {
        $purchaselead = Invoice::with('supplier')
        ->selectRaw("supplier_id, SUM(grandtotal) as total")    
        ->groupBy('supplier_id')
        ->orderBy('total','desc')
        ->get();
        $pdf = PDF::loadView('lead.purchasepdf',compact('purchaselead'));
        return $pdf->download('Purchaselead.pdf');
    }

    public function export_sale_lead_pdf()
    {
        $salelead = Order::with('customer')
        ->selectRaw("customer_id, SUM(grandtotal) as total")    
        ->groupBy('customer_id')
        ->orderBy('total','desc')
        ->get();
        $pdf = PDF::loadView('lead.salepdf',compact('salelead'));
        return $pdf->download('Salelead.pdf');
    }

}
