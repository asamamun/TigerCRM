<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class CustomerauthController extends Controller
{
    public function register(){
        // echo "hi";
        return view("customerauth.register");
    }
    public function store(Request $request){
    //dd($request->all());
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
        'mobile' => ['required', 'string', 'max:255', 'unique:customers'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);
    $customer = Customer::create([
        'name' => $request->name,
        'mobile' => $request->mobile,
        'email' => $request->email,
        'password' => Hash::make($request->password),        
    ]);
    if($customer->id){
    session([
        'name' => $request->name,
        'cid' => $customer->id,
        'clogged_in' => true
    ]);
    return redirect()->route('home');
}

    }
    
    public function login(){}
    public function check(){}
    public function logout(){
        // session()->forget(['name', 'cid', 'clogged_in']);
        session()->flush();
        return redirect()->route('home')->with('message','You are logged out!!!');
    }
}
