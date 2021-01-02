<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CircuitResource;
use App\Models\Circuit;
use Illuminate\Http\Request;

class CircuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $circuits = Circuit::all();
        return CircuitResource::collection($circuits);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new CircuitResource(Circuit::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Circuit  $circuit
     * @return \Illuminate\Http\Response
     */
    public function show($circuit)
    {
        return new CircuitResource($circuit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
