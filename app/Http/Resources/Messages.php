<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Messages extends JsonResource
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
            "receiver" =>  $this->receiver ,
            "sender_id" =>  $this->sender_id ,
            "message_body" =>  $this->message_body  ,
            "subject" =>  $this->subject ,
            "readed" =>  $this->readed,
        ];
    }
}
