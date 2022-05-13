<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request){

        gettype($this->email) === "string" ? $emails = json_decode($this->email) : $emails = $this->email;
        gettype($this->phone) === "string" ? $phones = json_decode($this->phone) : $phones = $this->phone;
        array_map(function($phone) {
            return "(".substr($phone, 0, 2).") ".substr($phone, 3, 4)."-".substr($phone,6);
        },$phones);
        return [
            'id' => $this->id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'cpf' => $this->cpf,
            'email' => $emails,
            'phone' => $phones,
        ];
    }
}
