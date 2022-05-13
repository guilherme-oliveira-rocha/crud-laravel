<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ContactCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'cpf' => $this->lastname,
            'email' => $this->email,
            'phone' => "(".substr($this->phone, 0, 2).") ".substr($this->phone, 3, 4)."-".substr($this->phone,6),
        ];
    }
}
