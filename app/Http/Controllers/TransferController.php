<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Http\Requests\StoreTransferRequest;
use App\Http\Requests\UpdateTransferRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alltransfer = Transfer::with(['sender', 'receiver'])->get();
        return view("transfer.index")
            ->with('alltransfer', $alltransfer)
            ->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::pluck('name', 'id');
        return view("transfer.create")->with('accounts', $accounts)->with('user', Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransferRequest $request)
    {
        DB::beginTransaction();
        $message = "";
        try {
            $t = new Transfer();
            $sa = Account::find($request->sender_account);
            $ra = Account::find($request->receiver_account);
            if($sa->id == $ra->id){
                return back()->withInput()->with('message', 'Same account transfer not possible');   
            }
            if ($sa && $ra) {
                $t->amount = $request->amount;
                $t->description = $request->description;
                $t->sender_account = $request->sender_account;
                $t->receiver_account = $request->receiver_account;
                //check whether sender has greater amount ot not. deduct amount from sender and add amount to receiver account.
                $sa->balance = intval($sa->balance) - intval($request->amount);
                if ($sa->balance >= 0) {
                    $sa->save();
                    $ra->balance = intval($ra->balance) +  intval($request->amount);
                    $ra->save();
                    $t->save();
                    $message = 'Account transfer done. Transaction ID: ' . $t->id;
                    //return back()->with('message', );
                } else {
                    return back()->withInput()->with('error', 'Error!! No sufficient amount. Tranasaction not done');
                }

            } else {
                return back()->withInput()->with('warning', 'Account not found!!');
                //return back()->with('message', 'Account not found!!');
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
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function show(Transfer $transfer)
    {
        return view('transfer.show', compact('transfer'))->with('user', Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transfer  $transfer
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfer $transfer)
    {
        $accounts = Account::pluck('name', 'id');
        return view('transfer.edit', compact('transfer'))->with('accounts', $accounts)->with('user', Auth::user());
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

        if ($transfer->save()) {
            return back()->with('message', "Update Successfully!!!");
        } else {
            return back()->with('message', "Update Failed!!!");
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
        if (Transfer::destroy($transfer->id)) {
            return back()->with('message', $transfer->id . ' Deleted!!!!');
        }
    }
}
