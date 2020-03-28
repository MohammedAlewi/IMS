<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PendingUsers;
use App\Http\Resources\Votes;
use App\Models\Votes as ModelsVotes;

class Candidate extends JsonResource
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
            "candidate" => new PendingUsers($this->user),
            "vote_number"=>count($this->votes),
            "info"=>$this->with($request)
        ];
    }

    public function with($request){
        return [
            "voters" => count(ModelsVotes::all()),
            "candidates" => count(User::where('role','candidate')->get()),
            "witness" => count(User::where('role','witnesses')->get()),
        ];
    }
}
