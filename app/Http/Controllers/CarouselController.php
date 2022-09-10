<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Http\Requests\StoreCarouselRequest;
use App\Http\Requests\UpdateCarouselRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcarousel = Carousel::all();
        return view('carousel.index',compact('allcarousel'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("carousel.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarouselRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarouselRequest $request)
    {
        //upload
        $path = $request->file('image')->store('public/carousels');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(1000, 430);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $data = [
            'title'=>$request->title,
            'image'=>$path,
            'description'=>$request->description,
        ];
        $c = Carousel::create($data);
        if($c){
            return back()->with('message','Carousel ' .$c->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel)
    {
        return view('carousel.show',compact('carousel'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        $status = [
            '1'=>'Active',
            '0'=>'Inactive',
        ];
        return view('carousel.edit',compact('carousel'))->with('status',$status)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarouselRequest  $request
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarouselRequest $request, Carousel $carousel)
    {
        //upload
        $path = $request->file('image')->store('public/carousels');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(1000, 430);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        if($carousel->image){
            Storage::delete($carousel->image);
        }

        $carousel->title = $request->title;
        $carousel->image = $path;
        $carousel->description = $request->description;
        $carousel->status = $request->status;

        if($carousel->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carousel  $carousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel)
    {
        if(Carousel::destroy($carousel->id)){
            return back()->with('message',$carousel->id. ' Deleted!!!!');
        }
    }

    public function updatecarouselstatus(Request $request){
        // echo $request->id;
        // Log::info($request->id);
        $status = Carousel::find($request->id);
        $status->status = $request->status;
        if($status->save()){
            return response()->json(['done'=> 1,'message'=>'Carousel Active']);
        }else{
            return response()->json(['done'=> 0,'message'=>'Carousel Inactive']);
        }

    }
}
