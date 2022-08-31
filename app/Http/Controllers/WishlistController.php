<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Requests\StoreWishlistRequest;
use App\Http\Requests\UpdateWishlistRequest;
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

        // $wishlists = Wishlist::where('customer_id', session('clogged_in'))->get;
        // dd($wishlists);
        // return view('layouts.ecommerce',compact('wishlists'));
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
    public function destroy(Wishlist $wishlist)
    {
        //
    }

    public function favourite(Request $request){
        // Log::info($request->pid);

        $customerid = session('clogged_in');
        // Log::info($customerid);
        $wish = new Wishlist();
        // $details = new OrderDetail();
        $data = [
            'customer_id' => $customerid,
            'product_id' => $request->pid
        ];
        // return response()->json($data);
        if(session('clogged_in')){
            $wish = Wishlist::create($data);
            return response()->json(['error'=>0,'message'=>"Wishlist added"]);
        } 
        else{
            return response()->json(['error'=>1,'message'=>"Please login first!"]);
        }


        // if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
        //     if(isset($_POST['bookid'])){
        //         require "../../connection.php";
        //         $id = $conn->escape_string($_POST['bookid']);
        //         $userid = $conn->escape_string($_SESSION['user_id']);
        //         $addtowishlist = "insert into fav(user_id,bookpost_id) values ('$userid','$id')";
        //         $conn->query($addtowishlist);
        //         if($conn->affected_rows > 0){
        //             echo "Book added to your favourite list";
        //         }
        //         else{
        //             echo "Already added";
        //         }
            
        //     }
        // }
        // else{
        //     echo "Create an account to add books to wishlist";
        // }
    }
}
