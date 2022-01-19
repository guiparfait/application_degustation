<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'nom' => ['required', 'string','min:3', 'max:255'],
            'prenom' => ['required', 'string','min:3', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Veillez Entrer votre Nom SVP!',
            'nom.string' => 'Le nom doit etre une chaine de caractère.',
            'nom.min' => 'Le nom doit avoir au minimun :min caractères.',
            'prenom.required' => 'Veillez Entrer votre/vos prenom(s) SVP!',
            'prenom.string' => 'Le/les prenom doit(vent) etre une/des chaine de caractère.',
            'prenom.min' => 'Le/les prenom(s) doit(vent) avoir au minimun :min caractères.',
        ];
    }
}
