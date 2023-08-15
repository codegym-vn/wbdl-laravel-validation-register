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
            'password'=>'required|min:8|max:32|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'full-name.required' => 'Full name không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.digits' => 'Số điện thoại có 10 số',
            'job.required' => 'Job không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có 8 ký tự',
            'password.max' => 'Mật khẩu phải có 32 ký tự',
            'password.confirmed' => 'Mật khẩu confirmed không đúng',
        ];
    }
}
