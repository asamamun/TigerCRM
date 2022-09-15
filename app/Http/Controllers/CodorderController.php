<?php

namespace App\Http\Controllers;

use App\Models\codorder;
use App\Http\Requests\StorecodorderRequest;
use App\Http\Requests\UpdatecodorderRequest;

class CodorderController extends Controller
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
     * @param  \App\Http\Requests\StorecodorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecodorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\codorder  $codorder
     * @return \Illuminate\Http\Response
     */
    public function show(codorder $codorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\codorder  $codorder
     * @return \Illuminate\Http\Response
     */
    public function edit(codorder $codorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecodorderRequest  $request
     * @param  \App\Models\codorder  $codorder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecodorderRequest $request, codorder $codorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\codorder  $codorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(codorder $codorder)
    {
        //
    }
}
