<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\PasswordMatchRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class PasswordExpiredRequest extends FormRequest
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
        'users.current_password' => ['required', new PasswordMatchRule],
        'users.password' => [
            'required',
            'confirmed',
            Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols(),
                Rule::unique(User::class)->ignore(Auth::user()->id)
            
        ],
        
        ];
    }
}
