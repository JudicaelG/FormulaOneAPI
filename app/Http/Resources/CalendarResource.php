<?php

namespace App\Http\Resources;

use App\Models\Circuit;
use Illuminate\Http\Resources\Json\JsonResource;

class CalendarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'year' => $this->year,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate,
            'circuit' => $this->circuit,
            'pilotes' => $this->pilotes,
        ];
    }
}
