<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Doctor extends JsonResource
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
            'name' => $this->name,
            'specialist' => $this->specialist,
            'fees' => $this->fees,
            'city' => $this->city,
            'counter' => $this->counter,
            'created_at' =>(string) $this->created_at,
            'updated_at' => (string)$this->updated_at
        ];
    }
}
