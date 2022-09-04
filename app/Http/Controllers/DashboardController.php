<?php

namespace App\Http\Controllers;

use App\Models\Capital;
use App\Models\Customer;
use App\Models\Expense;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $invoice = Invoice::sum('grandtotal');
        $order = Order::sum('grandtotal');
        $expense = Expense::sum('amount');
        $capital = Capital::sum('amount');
        $customer = Customer::all();
        $users = User::all();
        $supplier = Supplier::all();
        // dd($invoices);
        return view('dashboard.index')->with('user',Auth::user())->with(compact('invoice'))->with(compact('order'))->with(compact('expense'))->with(compact('capital'))->with(compact('customer'))->with(compact('users'))->with(compact('supplier'));
    }
}
