<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => new CountryResource($this->country),
            'state' => new StateResource($this->state),
            'address' => $this->address,
        ];
    }
}
