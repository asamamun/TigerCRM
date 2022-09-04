<?php

namespace App\Http\Controllers;

use App\Models\CustomerProfile;
use App\Http\Requests\StoreCustomerProfileRequest;
use App\Http\Requests\UpdateCustomerProfileRequest;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CustomerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('subcategories','products')->has('products')->get();
        $cinfo = Customer::find(session('cid'));
        return view('customerprofile.index')->with('customer',$cinfo)->with(compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerProfileRequest $request)
    {
        dd($request->fullname);
        $path = $request->file('image')->store('public/profiles');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $c = Customer::find(session('cid'));
        $p = new CustomerProfile();        
        $p->fullname = $request->fullname;
        $p->image = $path;
        $p->address = $request->address;
        if($c->customerprofile()->save($p)){
            return back()->with('message',"Your profile has been Created!!!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerProfile  $customerProfile
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerProfile $customerProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerProfile  $customerProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerProfile $customerProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerProfileRequest  $request
     * @param  \App\Models\CustomerProfile  $customerProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerProfileRequest $request, CustomerProfile $customerProfile)
    {
        $path = $request->file('image')->store('public/profiles');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $c = Customer::find(session('cid'));
        $p = $c->profile;
        if($p->image){
            Storage::delete($p->image);
        }
        $p->fullname = $request->fullname;
        $p->image = $path;
        $p->address = $request->address;
        if($c->profile()->save($p)){
            return back()->with('message',"Your profile has been updated!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerProfile  $customerProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerProfile $customerProfile)
    {
        //
    }
}
