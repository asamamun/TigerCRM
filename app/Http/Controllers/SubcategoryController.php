<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Http\Requests\StoreSubcategoryRequest;
use App\Http\Requests\UpdateSubcategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allsubcategory = Subcategory::with('category')->get();
        return view("subcategory.index")
        ->with('allsubcategory',$allsubcategory)
        ->with('user',Auth::user());
        // dd($allsubcategory->categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $categories = Category::pluck('name','id');
        // array_unshift($categories , ['-1'=>"Select Category"]);
        // dd($categories);
        return view("subcategory.create")->with('categories',$categories)->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubcategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubcategoryRequest $request)
    {
        //upload
        $path = $request->file('icon')->store('public/subcategories');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        // dd($request->category_id);

        /* $data = [
            'name'=>$request->name,
            'category_id'=>$request->category_id,
            'icon'=>$path,
            'description'=>$request->description,
        ];
        dd($data);
        $sc = Subcategory::create($data); */
        $sc = new Subcategory();
        $sc->name = $request->name;
        $sc->icon = $path;
        $sc->description = $request->description;
        $c = Category::find($request->category_id);
        if($c->subcategories()->save($sc)){
            return back()->with('message','Subcategory ' .$sc->id. ' Create Successfully!!!');
        }
        else{
            return back()->with('message','Error!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        return view('subcategory.show',compact('subcategory'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::pluck('name','id');
        return view('subcategory.edit',compact('subcategory'))->with('categories',$categories)->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubcategoryRequest  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubcategoryRequest $request, Subcategory $subcategory)
    {
        //upload
        $path = $request->file('icon')->store('public/subcategories');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        if($subcategory->icon){
            Storage::delete($subcategory->icon);
        }

        $subcategory->name = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->icon = $path;
        $subcategory->description = $request->description;

        if($subcategory->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        if(Subcategory::destroy($subcategory->id)){
            return back()->with('message',$subcategory->id. ' Deleted!!!!');
        }
    }
}
