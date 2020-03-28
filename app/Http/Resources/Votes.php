<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Votes extends JsonResource
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
            'token'=>$this->url,
            'voted'=>$this->created_at
        ];
    }
}
