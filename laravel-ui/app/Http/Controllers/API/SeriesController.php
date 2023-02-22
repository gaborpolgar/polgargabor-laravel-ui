<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = series::all();
        return response()->json($series);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeriesRequest $request)
    {
        $series = new Series();
        $series->fill($request->all());
        $series->save();
        return response()->json($series, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $series = Series::find($id);
        if (is_null($series)){
        return response()->json(["message"=> "Not Found"], 404);
    }
    return response()->json($series);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeriesRequest $request, $id)
    {
        $series = Series::find($id);
        if (is_null($series)){
        return response()->json(["message" => "Not Found"], 404);
    }
        $series->fill($request->all());
        $series->save();
        return response()->json($series);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $series = Series::find($id);
        if (is_null($series)){
        return response()->json(["message" => "Not Found"], 404);
    }
    $series->delete();
    return response()->noContent();
    }
}
