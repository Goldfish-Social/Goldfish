<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscoverRequest;
use App\Http\Requests\UpdateDiscoverRequest;
use App\Models\Discover;

class DiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Return index
        return view('discover.index');
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
     * @param  \App\Http\Requests\StoreDiscoverRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiscoverRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function edit(Discover $discover)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiscoverRequest  $request
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiscoverRequest $request, Discover $discover)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discover $discover)
    {
        //
    }
}
