<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use Illuminate\Support\Facades\Auth;
use PDF;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allstaff = Staff::all();
        return view('staff.index',compact('allstaff'))->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("staff.create")->with('user',Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStaffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request)
    {
        $data = [
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'address'=>$request->address,
            'designation'=>$request->designation,
            'salary'=>$request->salary,
        ];
        // dd($data);
        $s = Staff::create($data);
        if($s){
            return back()->with('message','Employee ' .$s->id. ' Create Successfully!!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        return view('staff.show',compact('staff'))->with('user',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
    return view('staff.edit',compact('staff'))->with('user',Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStaffRequest  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $staff->name = $request->name;
        $staff->mobile = $request->mobile;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->designation = $request->designation;
        $staff->salary = $request->salary;

        if($staff->save()){
            return back()->with('message',"Update Successfully!!!");
        }
        else{
            return back()->with('message',"Update Failed!!!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if(Staff::destroy($staff->id)){
            return back()->with('message',$staff->id. ' Deleted!!!!');
        }
    }

    public function trashed()
    {
        $allstaff = Staff::onlyTrashed()->get();
        return view('staff.trashed',compact('allstaff'))->with('user',Auth::user());
    }

    public function trashedRestore($id){
        $staff = Staff::onlyTrashed()->findOrFail($id);
        $staff->restore();
        return back();
    }

    public function trashedDelete($id){
        $staff = Staff::onlyTrashed()->findOrFail($id);
        $staff->forceDelete();
        return back();
    }
    public function export_stafflist_pdf()
    {
        $allstaff = Staff::onlyTrashed()->get();
        $pdf = PDF::loadView('staff.pdflist',compact('allstaff'));
        // $pdf = PDF::loadView('supplier.pdf');
        return $pdf->download('stafflist.pdf');
    }

}
