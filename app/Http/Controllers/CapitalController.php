<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use App\Http\Requests\StoreCapitalRequest;
use App\Http\Requests\UpdateCapitalRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use PDF;

class CapitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcapital = Capital::with('account')->get();
        return view("capital.index")
        ->with('allcapital',$allcapital)
        ->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::pluck('name','id');
        return view("capital.create")->with('accounts',$accounts)->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCapitalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapitalRequest $request)
    {
        DB::beginTransaction();
        $message = "";
        try {
            $c = new Capital();
            $a = Account::find($request->payment_type);
            if($a){
                $c->name = $request->name;
                $c->amount = $request->amount;
                $c->payment_type = $request->payment_type;
                $c->description = $request->description;
                $a->balance = $a->balance + $request->amount;
                $a->save();
                $c->save();
                $message = 'Capital added successfully. ID: ' . $c->id;
            } else{
                return back()->withInput()->with('warning', 'Account not found!!');
            }
            DB::commit();
            return back()->with('message', $message);

        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput()->with('error', "Error!!! Transaction not completed");
            abort(404);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function show(Capital $capital)
    {
        return view('capital.show',compact('capital'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function edit(Capital $capital)
    {
        $accounts = Account::pluck('name','id');
        return view('capital.edit',compact('capital'))->with('accounts',$accounts)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCapitalRequest  $request
     * @param  \App\Models\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCapitalRequest $request, Capital $capital)
    {
        $capital->name = $request->name;
        $capital->amount = $request->amount;
        $capital->payment_type = $request->payment_type;
        $capital->description = $request->description;

        if($capital->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Capital  $capital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capital $capital)
    {
        if(Capital::destroy($capital->id)){
            return back()->with('message',$capital->id. ' Deleted!!!!');
        }
    }
    public function export_capital_pdf()
    {
        $allcapital= Capital::get();
        $pdf = PDF::loadView('capital.pdf',compact('allcapital'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('capitallist.pdf');
    }
    public function trashed()
    {
        $allcapital = Capital::onlyTrashed()->get();
        return view('capital.trashed',compact('allcapital'))->with('user',Auth::user());
    }

    public function trashedRestore($id){
        $capital = Capital::onlyTrashed()->findOrFail($id);
        $capital->restore();
        return back();
    }

    public function trashedDelete($id){
        $capital = Capital::onlyTrashed()->findOrFail($id);
        $capital->forceDelete();
        return back();
    }
    public function export_capitallist_pdf()
    {
        $allcapital = Capital::onlyTrashed()->get();
        $pdf = PDF::loadView('capital.pdflist',compact('allcapital'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('capitallist.pdf');
    }
}
