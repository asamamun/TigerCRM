<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Support\Facades\Auth;
use PDF;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allaccount = Account::all();
        return view('account.index',compact('allaccount'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("account.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountRequest $request)
    {
        $data = [
            'name'=>$request->name,
            'accountnumber'=>$request->accountnumber,
            'balance'=>$request->balance,
        ];
        // dd($data);
        $a = Account::create($data);
        if($a){
            return back()->with('message','Account ' .$a->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('account.show',compact('account'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('account.edit',compact('account'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountRequest  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        $account->name = $request->name;
        $account->accountnumber = $request->accountnumber;
        $account->balance = $request->balance;

        if($account->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        if(Account::destroy($account->id)){
            return back()->with('message',$account->id. ' Deleted!!!!');
        }
    }

    public function export_account_pdf()
    {
        $allaccount = Account::get();
        $pdf = PDF::loadView('account.pdf',compact('allaccount'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('Accountlist.pdf');
    }

    public function trashed()
    {
        $allaccount = Account::onlyTrashed()->get();
        return view('account.trashed',compact('allaccount'))->with('user',Auth::user());
    }

    public function trashedRestore($id){
        $account = Account::onlyTrashed()->findOrFail($id);
        $account->restore();
        return back();
    }

    public function trashedDelete($id){
        $account = Account::onlyTrashed()->findOrFail($id);
        $account->forceDelete();
        return back();
    }
}
