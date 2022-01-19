<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Veillez Entrer le Nom de l\'admin SVP!',
            'nom.string' => 'Le nom doit etre une chaine de caractère.',
            'nom.min' => 'Le nom doit avoir au minimun :min caractères.',
            'prenom.required' => 'Veillez Entrer le/les prenom(s) de l\'admin SVP!',
            'prenom.string' => 'Le/les prenom doit(vent) etre une/des chaine de caractère.',
            'prenom.min' => 'Le/les prenom(s) doit(vent) avoir au minimun :min caractères.',
            'email.email' => 'Veillez Entrer une adresse email valide SVP!',
            'email.required' => 'Veiller Entrer une adresse email SVP!',
            'email.unique' => 'Cette adresse email est deja utilisée veillez renseigner un autre SVP!',
        ];
    }
}
