<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $date = Carbon::now()->subDays(30);
            // $users = Order::where('created_at', '>=', $date)->get();
        
            // dd($users);
        // $allorder = Order::all();
        $allorder = Order::with('user','customer','account')->get();
        return view('order.index',compact('allorder'))->with('user',Auth::user());
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function orderdetails($id){
        $orderdetails = OrderDetail::where('order_id',$id)->with('product')->get();
        // dd($orderdetails);
        return view('order.details',compact('orderdetails'));
    }

    public function pdf($id)
    {
        $orderdetails = OrderDetail::where('order_id',$id)->with('product')->get();
        $pdf = PDF::loadView('order.details',compact('orderdetails'))->setPaper('a4', 'portrait');
        // Pdf::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('myfile.pdf');
        return $pdf->download('InvoiceNo_'.$id.'.pdf');

    }

    public function print($id){
        $orderdetails = OrderDetail::where('order_id',$id)->with('product')->get();
        // dd($orderdetails);
        return view('order.details',compact('orderdetails'));
    }

    public function export_order_pdf()
    {
        $allorder = Order::with('user','customer','account')->get();
        $pdf = PDF::loadView('order.pdf',compact('allorder'));
        return $pdf->download('Orderlist.pdf');
    }

}
