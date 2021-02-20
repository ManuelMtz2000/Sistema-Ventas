<?php

namespace App\Http\Controllers;

use App\Models\Inventary;
use Illuminate\Http\Request;

class InventaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/inventario/inventarioIndex");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/inventario/inventarioForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function show(Inventary $inventary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventary $inventary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventary $inventary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventary $inventary)
    {
        //
    }
}
