<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\Auth;
use PDF;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allinvoice = Invoice::all();
        return view('invoice.index',compact('allinvoice'))->with('supplier')->with('user',Auth::user());
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
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }

    public function invoicedetails($id){
        $invoicedetails = InvoiceDetail::where('invoice_id',$id)->with('product')->get();
        return view('invoice.details',compact('invoicedetails'));
    }

    public function pdf($id)
    {
        $invoicedetails = InvoiceDetail::where('invoice_id',$id)->with('product')->get();
        $pdf = PDF::loadView('invoice.details',compact('invoicedetails'))->setPaper('a4', 'portrait');
        // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        return $pdf->download('InvoiceNo_'.$id.'.pdf');

    }

    public function print($id){
        $invoicedetails = InvoiceDetail::where('invoice_id',$id)->with('product')->get();
        return view('invoice.details',compact('invoicedetails'));
    }

    public function export_invoice_pdf()
    {
        $allinvoice = Invoice::all();
        // return view('invoice.index',compact('allinvoice'))->with('supplier')->with('user',Auth::user());
        $pdf = PDF::loadView('invoice.pdf',compact('allinvoice'));
        return $pdf->download('Invoicelist.pdf');
    }
}
