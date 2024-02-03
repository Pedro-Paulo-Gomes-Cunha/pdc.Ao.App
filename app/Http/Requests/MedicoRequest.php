<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
            
            'nome'=>'required',
            'nascimento'=>'required',
            'genero'=>'required'
            'municipio'=>'required'
            'bi'=>'required'=>'required',
            'telefone'=>'required'
            'codigo_postal'=>'required',
            'email'=>'required',
            'especialidade'=>'required'
        ];
    }

    public function messages(){

        'nome.required'=>'Obrigatório',
        'nascimento.required'=>'Obrigatório',
        'genero.required'=>'Obrigatório',
        'municipio.required'=>'Obrigatório',
        'bi.required'=>'Obrigatório',
        'telefone.required'=>'Obrigatório',
        'codigo_postal.required'=>'Obrigatório',
        'email.required'=>'Obrigatório',
        'email.email'=>'Email Inválido',
        'email.unique'=>'Já está a ser usado',
        'especialidade.required'=>'Obrigatório',
    }
}
