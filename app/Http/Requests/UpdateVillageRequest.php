<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVillageRequest extends StoreVillageRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'string|unique:villages,code|max:10',
            'lat' => 'decimal:2,4|nullable',
            'long' => 'decimal:2,4|nullable',
            'pos' => 'numeric|nullable'
        ];
    }
}
