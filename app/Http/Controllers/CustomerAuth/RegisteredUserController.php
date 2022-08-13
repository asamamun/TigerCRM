<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('customerauth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'mobile' => ['required', 'string', 'max:255', 'unique:customers'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if($request->role == "1" || $request->role == "2"){
            return redirect("/");
        }
        $user = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'role'=> $request->role
        ]);

        event(new Registered($user));

        Auth::login($user);
        $r = Auth::user()->role;
        if($r == "1"){
            return redirect(RouteServiceProvider::ADMIN);
        }
        elseif($r =="2"){
            return redirect(RouteServiceProvider::USER);
        }
        elseif($r =="3"){
            return redirect(RouteServiceProvider::CUSTOMER);
        }
        else{
            return redirect("/");
        }

    }
}
