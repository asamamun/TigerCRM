<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('subcategories','products')->has('products')->get();
        $wishlists = Wishlist::with('customer','product.productimages')->where('customer_id', session('cid'))->get();
        return view('wishlist.index',compact('wishlists'))->with(compact('categories'));
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
     * @param  \App\Http\Requests\StoreWishlistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWishlistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWishlistRequest  $request
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWishlistRequest $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Wishlist $wishlist)
    // {
    //     if(Wishlist::destroy($wishlist->id)){
    //         return back()->with('message',$wishlist->id. ' Deleted!!!!');
    //     }
    // }
    public function delete(Request $request)
    {
        // Log::info($request->wishlist_id);
        Wishlist::destroy($request->wishlist_id);
    }

    public function favourite(Request $request){
        $customerid = session('cid');
        // $count = Wishlist::where([
        //     'customer_id' => $customerid,            
        // ])->count();
        // Log::info($count);
        
        if(Wishlist::where([
            'customer_id' => $customerid,
            'product_id' => $request->pid
        ])->count()){
            return response()->json(['error'=>1,'message'=>"Wishlist Already Added"]);
        }

        
        // Log::info($customerid);
        $wish = new Wishlist();
        $data = [
            'customer_id' => $customerid,
            'product_id' => $request->pid
        ];
        if(session('clogged_in')){
            $wish = Wishlist::create($data);
            $totalitem = Wishlist::where([
                'customer_id' => $customerid                
            ])->count();
            return response()->json(['error'=>0,'message'=>"Wishlist added",'ti'=>$totalitem]);
        } 
        else{
            return response()->json(['error'=>1,'message'=>"Please login first!"]);
        }

    }
}
