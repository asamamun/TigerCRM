<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

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
        DB::beginTransaction();
        $message = "";
        try {
            $e = new Expense();
            $a = Account::find($request->payment_type);
            if($a){
                $e->name = $request->name;
                $e->amount = $request->amount;
                $e->payment_type = $request->payment_type;
                $e->description = $request->description;
                $a->balance = $a->balance - $request->amount;
                if($a->balance >= 0){
                    $a->save();
                    $e->save();
                    $message = 'Expense added successfully. ID: ' . $e->id;
                } else{
                    return back()->withInput()->with('error', 'Error!! No sufficient amount. Tranasaction not done');
                }
            } else{
                return back()->withInput()->with('message', 'Account not found!!');
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
    public function export_expense_pdf()
    {
        $allexpense = Expense::get();
        $pdf = PDF::loadView('expense.pdf',compact('allexpense'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('Expenselist.pdf');
    }
    public function trashed()
    {
        $allexpense = Expense::onlyTrashed()->get();
        return view('expense.trashed',compact('allexpense'))->with('user',Auth::user());
    }

    public function trashedRestore($id){
        $expense = Expense::onlyTrashed()->findOrFail($id);
        $expense->restore();
        return back();
    }

    public function trashedDelete($id){
        $expense = Expense::onlyTrashed()->findOrFail($id);
        $expense->forceDelete();
        return back();
    }
    public function export_expenselist_pdf()
    {
        $allexpense = Expense::onlyTrashed()->get();
        $pdf = PDF::loadView('expense.pdflist',compact('allexpense'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('expenselist.pdf');
    }
}
