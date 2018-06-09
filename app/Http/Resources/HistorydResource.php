<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Patient;
class HistorydResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $name=Patient::where('patient_id','=',$this->patient_id)->value('name');
        return [
            'book_id' => $this->book_id,
            'patient_name'=>$name,
            'status'=>$this->status,
            'updated_at' => (string)$this->updated_at
        ];    
    }
}
