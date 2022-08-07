<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use App\Http\Requests\StoreCapitalRequest;
use App\Http\Requests\UpdateCapitalRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

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
        $c = new Capital();
        $c->name = $request->name;
        $c->amount = $request->amount;
        $c->description = $request->description;
        $a = Account::find($request->payment_type);
        if($a->capitals()->save($c)){
            return back()->with('message','Capital ' .$c->id. ' Create Successfully!!!');
        }
        else{
            return back()->with('message','Error!!');
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
}
