<?php

namespace App\Http\Requests\users;
use Illuminate\Validation\Rules\Password;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=>"required|string|min:2",
            "email"=> "required|email|unique:users,email",
            // very strong Validation password //
            // "password"=>["required",Password::min(6)->letters()->numbers()->mixedCase()->symbols()
            // ->uncompromised()],
        ];
    }
}
