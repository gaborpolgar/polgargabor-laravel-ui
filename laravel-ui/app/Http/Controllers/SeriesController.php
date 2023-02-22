<?php

namespace App\Http\Controllers;

use App\Models\series;
use App\Http\Requests\StoreseriesRequest;
use App\Http\Requests\UpdateseriesRequest;

class SeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreseriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreseriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\series  $series
     * @return \Illuminate\Http\Response
     */
    public function show(series $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\series  $series
     * @return \Illuminate\Http\Response
     */
    public function edit(series $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateseriesRequest  $request
     * @param  \App\Models\series  $series
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateseriesRequest $request, series $series)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\series  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy(series $series)
    {
        //
    }
}
