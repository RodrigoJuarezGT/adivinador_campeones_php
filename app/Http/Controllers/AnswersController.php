<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreanswersRequest;
use App\Http\Requests\UpdateanswersRequest;
use App\Models\answers;

class AnswersController extends Controller
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
     * @param  \App\Http\Requests\StoreanswersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreanswersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function show(answers $answers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function edit(answers $answers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateanswersRequest  $request
     * @param  \App\Models\answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateanswersRequest $request, answers $answers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\answers  $answers
     * @return \Illuminate\Http\Response
     */
    public function destroy(answers $answers)
    {
        //
    }
}
