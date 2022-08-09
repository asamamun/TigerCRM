<?php

namespace App\Http\Controllers;

use App\Models\CustomerDashboard;
use App\Http\Requests\StoreCustomerDashboardRequest;
use App\Http\Requests\UpdateCustomerDashboardRequest;

class CustomerDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('customerdashboard.index');
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
     * @param  \App\Http\Requests\StoreCustomerDashboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerDashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerDashboard  $customerDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerDashboard $customerDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerDashboard  $customerDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerDashboard $customerDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerDashboardRequest  $request
     * @param  \App\Models\CustomerDashboard  $customerDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerDashboardRequest $request, CustomerDashboard $customerDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerDashboard  $customerDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerDashboard $customerDashboard)
    {
        //
    }
}