<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "name"=>"required|string|min:1",
            "price"=>"required|numeric|min:1",
            "old_price"=>"nullable",
            "count"=>"required|numeric|min:1",
            "cat"=>"required",
            "image"=>"required|max:5|min:5",
            "image.*"=>"required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ];


    }
}
