<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddConsommationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "consommation.chauffeur"=>"required",
            "consommation.plaque"=>"required",
            "consommation.companie"=>"required",
            "consommation.littre"=>"required|integer",
            "consommation.index"=>"required|integer",
        ];
    }
}
