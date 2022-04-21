<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreplayersRequest;
use App\Http\Requests\UpdateplayersRequest;
use App\Models\players;

class PlayersController extends Controller
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
     * @param  \App\Http\Requests\StoreplayersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreplayersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function show(players $players)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function edit(players $players)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateplayersRequest  $request
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateplayersRequest $request, players $players)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\players  $players
     * @return \Illuminate\Http\Response
     */
    public function destroy(players $players)
    {
        //
    }
}
