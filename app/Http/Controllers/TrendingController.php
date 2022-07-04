<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrendingRequest;
use App\Http\Requests\UpdateTrendingRequest;
use App\Models\Trending;

class TrendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return index
        return view('trending.index');
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
     * @param  \App\Http\Requests\StoreTrendingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrendingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trending  $trending
     * @return \Illuminate\Http\Response
     */
    public function show(Trending $trending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trending  $trending
     * @return \Illuminate\Http\Response
     */
    public function edit(Trending $trending)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTrendingRequest  $request
     * @param  \App\Models\Trending  $trending
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTrendingRequest $request, Trending $trending)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trending  $trending
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trending $trending)
    {
        //
    }
}
