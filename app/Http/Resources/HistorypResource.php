<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Doctor;
class HistorypResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $name=Doctor::where('id','=',$this->doctor_id)->value('name');
        return [
            'book_id' => $this->book_id,
           'doctor_name'=>$name,
            'status'=>$this->status,
            'updated_at' => (string)$this->updated_at
        ];  
    }
}
