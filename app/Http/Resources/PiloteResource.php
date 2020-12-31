<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PiloteResource extends JsonResource
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
            'pilote_id' => $this->id,
            'pilote_firstName' => $this->firstName,
            'pilote_lastName' => $this->lastName,
            'pilote_number' => $this->number,
            'pilote_photo' => $this->photo,
        ];
    }
}
