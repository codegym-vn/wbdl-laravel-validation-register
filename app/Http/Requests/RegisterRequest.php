<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'full-name'=>'required',
            'email'=>'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone,digits:10',
            'job'=>'required',
            'password'=>'required|min:8|max:255|confirmed',
        ];
    }
}
