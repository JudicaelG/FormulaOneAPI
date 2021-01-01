<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PiloteResource;
use App\Models\Pilote;
use Illuminate\Http\Request;

class PiloteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilotes = Pilote::all();
        return PiloteResource::collection($pilotes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return new PiloteResource(Pilote::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Pilote  $pilote
     * @return \Illuminate\Http\Response
     */
    public function show(Pilote $pilote)
    {
        return new PiloteResource($pilote);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Pilote $pilote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pilote $pilote)
    {
        $pilote->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Pilote $pilote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pilote $pilote)
    {
        $pilote->delete();
    }
}
