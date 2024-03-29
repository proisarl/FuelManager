<?php

namespace App\Http\Controllers;

use App\Models\Consommation;
use Illuminate\Http\Request;

class ConsommationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("consommation-pump");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function investigation()
    {
        return view("investigation");
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
    public function show($consommation)
    {

        $vehicule=Consommation::where("plaque",$consommation)->orderBy('index',"asc")->get();
        return view("components.show-detail-vehicule",compact("vehicule"));
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
