<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     title="PiloteResource",
 *     description="Pilote resource",
 *     @OA\Xml(
 *         name="PiloteResource"
 *     )
 * )
 */
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
            'birthday' => $this->birthday,
            'nationality' => $this->nationality,
            'team' => $this->team,
        ];
    }
}
