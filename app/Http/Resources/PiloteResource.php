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
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'number' => $this->number,
            'photo' => $this->photo,
        ];
    }
}
