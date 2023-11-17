<?php

namespace App\Http\Controllers;

use App\Models\Ame;
use App\Http\Requests\StoreAmeRequest;
use App\Http\Requests\UpdateAmeRequest;

class AmeControllerbackup extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        dd('coucou');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAmeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ame $ame)
    {
        //
        dd('coucou');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ame $ame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAmeRequest $request, Ame $ame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ame $ame)
    {
        //
    }
}
