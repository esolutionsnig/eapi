<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Show raw data
        // return parent::toArray($request);

        // show formatted data
        return [
            'custormer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star
        ];
    }
}
