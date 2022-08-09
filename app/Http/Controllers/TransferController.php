<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Http\Requests\StoreTransferRequest;
use App\Http\Requests\UpdateTransferRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alltransfer = Transfer::with(['sender','receiver'])->get();
        return view("transfer.index")
        ->with('alltransfer',$alltransfer)
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
        return view("transfer.create")->with('accounts',$accounts)->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransferRequest $request)
    {
        $t = new Transfer();
        $t->amount = $request->amount;
        $t->description = $request->description;
        $sa = Account::find($request->sender_account);
        $ra = Account::find($request->receiver_account);
        if($sa->transfers()->save($t) && $ra->transfers()->save($t)){
            return back()->with('message','Transfer ' .$t->id. ' Successfully!!!');
        }
        else{
            return back()->with('message','Error!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        return view('transfer.show',compact('transfer'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        $accounts = Account::pluck('name','id');
        return view('transfer.edit',compact('transfer'))->with('accounts',$accounts)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransferRequest  $request
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransferRequest $request, Transfer $transfer)
    {
        
        $transfer->sender_account = $request->sender_account;
        $transfer->receiver_account = $request->receiver_account;
        $transfer->amount = $request->amount;        
        $transfer->description = $request->description;

        if($transfer->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfer $transfer)
    {
        if(Transfer::destroy($transfer->id)){
            return back()->with('message',$transfer->id. ' Deleted!!!!');
        }
    }
}
