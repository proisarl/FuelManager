<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReleveRequest extends FormRequest
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
            "remise.id"=>"required",
            "remise.passwordRelevant"=>"required",
            "remise.password"=>"required",
            "remise.commentaire"=>"required|min:3",
        ];
    }
}
