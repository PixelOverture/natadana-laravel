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
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'phone' => 'required|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     */

    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter',
            'username.required' => 'Username tidak boleh kosong',
            'username.max' => 'Username tidak boleh lebih dari 255 karakter',
            'username.unique' => 'Username sudah digunakan',
            'phone.required' => 'Nomor telepon tidak boleh kosong',
            'phone.unique' => 'Nomor telepon sudah digunakan',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password tidak boleh kosong',
        ];
    }
}
