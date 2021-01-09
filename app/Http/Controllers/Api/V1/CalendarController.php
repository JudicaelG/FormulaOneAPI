<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CalendarResource;
use App\Models\Calendar;
use App\Models\Circuit;
use Carbon\Traits\Date;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendar = Calendar::all();
        return CalendarResource::collection($calendar);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calendar = new Calendar();
        $calendar->year = $request->get('year');
        $calendar->startDate = \date('Y-m-d', strtotime($request->get('startDate')));
        $calendar->endDate = \date('Y-m-d', strtotime($request->get('endDate')));
        //dd($request->get('pilote_id'));


        $circuit = Circuit::find($request->get("circuit_id"));
        $circuit->calendars()->save($calendar);
        $calendar->pilotes()->attach($request->get('pilote_id'));
        return new CalendarResource($calendar);
    }

    /**
     * Display the specified resource.
     *
     * @param  Calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show($calendar)
    {
        return new CalendarResource($calendar->circuit());
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
