<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allexpense = Expense::with('account')->get();
        return view("expense.index")
        ->with('allexpense',$allexpense)
        ->with('user',Auth::user());
        dd($allexpense);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::pluck('name','id');
        return view("expense.create")->with('accounts',$accounts)->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExpenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseRequest $request)
    {
        $e = new Expense();
        $e->name = $request->name;
        $e->amount = $request->amount;
        $e->payment_type = $request->payment_type;
        $e->description = $request->description;
        $a = Account::find($request->payment_type);
        if($a->expenses()->save($e)){
            return back()->with('message','Expense ' .$e->id. ' Create Successfully!!!');
        }
        else{
            return back()->with('message','Error!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {
        return view('expense.show',compact('expense'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        $accounts = Account::pluck('name','id');
        return view('expense.edit',compact('expense'))->with('accounts',$accounts)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExpenseRequest  $request
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        $expense->name = $request->name;
        $expense->amount = $request->amount;
        $expense->payment_type = $request->payment_type;
        $expense->description = $request->description;

        if($expense->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expense $expense)
    {
        if(Expense::destroy($expense->id)){
            return back()->with('message',$expense->id. ' Deleted!!!!');
        }
    }
}
