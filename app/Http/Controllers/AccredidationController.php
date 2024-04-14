<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccredidationRequest;
use App\Http\Requests\UpdateAccredidationRequest;
use App\Models\Accredidation;

class AccredidationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('accredidations.index');
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
    public function store(StoreAccredidationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accredidation $accredidation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accredidation $accredidation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccredidationRequest $request, Accredidation $accredidation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accredidation $accredidation)
    {
        //
    }
}
