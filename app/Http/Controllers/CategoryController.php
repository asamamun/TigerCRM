<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Policies\CategoryPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use PDF;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allcategory = Category::all();
        return view('category.index',compact('allcategory'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //upload
        $path = $request->file('icon')->store('public/categories');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        $data = [
            'name'=>$request->name,
            'icon'=>$path,
            'description'=>$request->description,
        ];
        // dd($data);
        $c = Category::create($data);
        if($c){
            return back()->with('message','Category ' .$c->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $cat)
    {
        // dd($cat);
        return view('category.show',compact('cat'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $cat)
    {
        return view('category.edit',compact('cat'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $cat)
    {
        //upload
        $path = $request->file('icon')->store('public/categories');
        $storagepath = Storage::path($path);
        $img = Image::make($storagepath);

        // resize image instance
        $img->resize(320, 320);

        // insert a watermark
        // $img->insert('public/watermark.png');

        // save image in desired format
        $img->save($storagepath);

        if($cat->icon){
            Storage::delete($cat->icon);
        }

        $cat->name = $request->name;
        $cat->icon = $path;
        $cat->description = $request->description;

        if($cat->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $cat)
    {
        if(Category::destroy($cat->slug)){
            return back()->with('message',$cat->slug. ' Deleted!!!!');
        }
    }
    // public function createslug(){
        
    //     $lists = Category::all();
    //     foreach ($lists as $list) {
    //         $slug = SlugService::createSlug(Category::class, 'slug', $list->name);            
    //     $list->save();
    //     }
    // }

    public function export_category_pdf()
    {
        $allcategory = Category::get();
        $pdf = PDF::loadView('category.pdf',compact('allcategory'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('Categorylist.pdf');
    }

}
