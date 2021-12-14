<?php

namespace App\Http\Controllers;

use App\Models\Imc;
use App\Http\Requests\StoreImcRequest;
use App\Http\Requests\UpdateImcRequest;

class ImcController extends Controller
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
     * @param  \App\Http\Requests\StoreImcRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImcRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imc  $imc
     * @return \Illuminate\Http\Response
     */
    public function show(Imc $imc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imc  $imc
     * @return \Illuminate\Http\Response
     */
    public function edit(Imc $imc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImcRequest  $request
     * @param  \App\Models\Imc  $imc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImcRequest $request, Imc $imc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imc  $imc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imc $imc)
    {
        //
    }
}
