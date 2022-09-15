<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PDF;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcustomer= Customer::all();
        return view('customer.index',compact('allcustomer'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("customer.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->mobile,
            'mobile'=>$request->email,
            'address'=>$request->address,
        ];
        $c = Customer::create($data);
        if($c){
            return back()->with('message','Customer ' .$c->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show',compact('customer'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->mobile = $request->mobile;
        $customer->address = $request->address;
        if($customer->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        // if(Customer::destroy($customer->id)){
        //     return back()->with('message',$customer->id. ' Deleted!!!!');
        // }
    }
    public function export_customer_pdf()
    {
        $allcustomer = customer::get();
        $pdf = PDF::loadView('customer.pdf',compact('allcustomer'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('Customerlist.pdf');
    }
    public function newcustomer(Request $request){
/*         // echo "hi";
        return response()->json(['a'=>"b"]);
        */
/*         return response()->json([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),        
        ]);  */  
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:customers'],
            'mobile' => ['required', 'string', 'max:15', 'unique:customers'],
            'password' => ['required'],
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['success' => false,'errors'=>$validator->errors()->all()]);
        }    

        //return response()->json($m);
        $customer = Customer::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),        
        ]);
        if($customer){
            return response()->json([
                'id' => $customer->id,
                'name'=>$customer->name,
                'mobile'=>$customer->mobile,
                'success' => true,
                'errors'=>null
            ]);
        }
        else{

        }
    }
}
