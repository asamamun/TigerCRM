<?php

namespace App\Http\Controllers;

use App\Models\CodorderDetails;
use App\Http\Requests\StoreCodorderDetailsRequest;
use App\Http\Requests\UpdateCodorderDetailsRequest;

class CodorderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCodorderDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCodorderDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CodorderDetails  $codorderDetails
     * @return \Illuminate\Http\Response
     */
    public function show(CodorderDetails $codorderDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CodorderDetails  $codorderDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CodorderDetails $codorderDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCodorderDetailsRequest  $request
     * @param  \App\Models\CodorderDetails  $codorderDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCodorderDetailsRequest $request, CodorderDetails $codorderDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CodorderDetails  $codorderDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CodorderDetails $codorderDetails)
    {
        //
    }
}
