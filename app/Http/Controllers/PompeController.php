<?php

namespace App\Http\Controllers;

use App\Models\Pompe;
use Illuminate\Http\Request;

class PompeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pompes");
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pompe $pompe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pompe $pompe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pompe $pompe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pompe $pompe)
    {
        //
    }
}
