<?php

namespace App\Http\Controllers;

use App\Models\Userpregunta;
use App\Http\Requests\StoreUserpreguntaRequest;
use App\Http\Requests\UpdateUserpreguntaRequest;

class UserpreguntaController extends Controller
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
     * @param  \App\Http\Requests\StoreUserpreguntaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserpreguntaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userpregunta  $userpregunta
     * @return \Illuminate\Http\Response
     */
    public function show(Userpregunta $userpregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userpregunta  $userpregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Userpregunta $userpregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserpreguntaRequest  $request
     * @param  \App\Models\Userpregunta  $userpregunta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserpreguntaRequest $request, Userpregunta $userpregunta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userpregunta  $userpregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userpregunta $userpregunta)
    {
        //
    }
}
