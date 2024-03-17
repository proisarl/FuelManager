<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Message;
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
            "consommation.companie_id"=>"required|integer",
            "consommation.littre"=>"required|integer",
            "consommation.department"=>"required|string|min:3",
            "consommation.type_vehicule_id"=>"required|integer",
            "consommation.indexdepart"=>"required|integer",
            "consommation.indexcloture"=>"required|integer",
            "consommation.pompiste"=>"required|string",
            "consommation.pompe_id"=>"required",
            "consommation.index"=>"integer|required_if:hs,false",
            "consommation.companie"=>['string','required_if:companie_id,38','min:2'],
        ];
    }
}
