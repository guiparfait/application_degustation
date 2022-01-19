<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentaireRequest extends FormRequest
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
            'libelle' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'libelle.required' => 'Donner votre avis sur cette degustation ou sur l\'avis des autres consernant cette degustation.',
        ];
    }
}
