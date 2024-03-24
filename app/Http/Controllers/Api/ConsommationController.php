<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Consommation;
use Illuminate\Http\Request;

class ConsommationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Consommation::all();
        return response()->json([
            'products' => $products
        ]);
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
    public function show(Consommation $consommation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consommation $consommation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consommation $consommation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consommation $consommation)
    {
        //
    }
}
