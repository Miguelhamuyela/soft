<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idcard' => 'required|string|unique:signups|max:255',
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email|confirmed',
            'photo' => 'required|mimes:jpg,png,jpeg,svg,gif'
            /* 
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5' */
        ];
    }
    public function messages()
    {
        return [
            'idcard.required' => 'O nº de Passaporte/Bilhete de Identidade é obrigatório.',
            'idcard.string' => 'O nº de Passaporte/Bilhete de Identidade deve ser uma string.',
            'idcard.unique' => 'Já temos uma candidatura com o nº de Passaporte/Bilhete de Identidade inserido',
            'idcard.max' => 'O nº de Passaporte/Bilhete de Identidade não pode ser superior a :max caracteres.',

            'name.required' => 'O nome é obrigatório.',
            'name.string' => 'O nome deve ser uma string.',
            'name.max' => 'O nome não pode ser superior a :max caracteres.',

            'country.required' => 'O País é obrigatório.',
            'country.string' => 'O País deve ser uma string.',
            'country.max' => 'O País não pode ser superior a :max caracteres.',

            'email.required' => 'O Email é obrigatório.',
            'email.email' => 'O Email deve ser um endereço de e-mail válido.',
            'email.confirmed' => 'O Campo Email de Confirmação não confere.',

            'photo.required' => 'A Fotografia de Identificação é obrigatório.',
            'photo.mimes' => 'A Fotografia de Identificação deve ser um arquivo do tipo: :values.',

        ];
    }
}
