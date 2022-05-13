<?php

namespace App\Http\Requests;
use App\Rules\RightCpf;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    
        protected function prepareForValidation()
    {
        $phones = $this->phone;
        array_map(function($phone) {
            return (int) preg_replace( '/[^0-9]/is', '', $phone );
        },$phones);
    $this->merge([
        'cpf' => (int) preg_replace( '/[^0-9]/is', '', $this->cpf ),
        'phone' => $phones,
        'email' => $this->email,
    ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'phone' => ['required'],
            'cpf' => ['nullable', "unique:contacts,cpf, {$this->id}", "numeric", new RightCpf],
        ];
    }
}
