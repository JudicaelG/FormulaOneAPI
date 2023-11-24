<?php

namespace App\Http\Controllers\Api\V1;

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
     *
     * @OA\Get(
     *     path="/v1/pilotes",
     *     operationId="getPilotesList",
     *     tags={"Pilotes"},
     *     summary="Get list of pilotes",
     *     description="Returns list of pilotes",
     *     @OA\Response(
     *     response=200,
     *     description="Successful operation",
     *
     *      )
     * )
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
        //dd($request->get('firstName'));
        $pilote = new Pilote();
        $pilote->firstName = $request->get('firstName');
        $pilote->lastName = $request->get('lastName');
        $pilote->number = $request->get('number');
        $pilote->photo = $request->get('photo');
        $pilote->nationality = $request->get('nationality');
        $pilote->birthday = \date('Y-m-d', strtotime($request->get('birthday')));
        $pilote->team = $request->get('team');
        $pilote->save();
        return new PiloteResource($pilote);
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
