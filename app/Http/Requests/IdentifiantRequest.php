<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdentifiantRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'confmail' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Veillez Entrer une adresse email valide SVP!',
            'email.required' => 'Veiller Entrer une adresse email SVP!',
            'confmail.email' => 'Veillez Entrer une adresse email valide SVP!',
            'confmail.required' => 'Veiller Entrer de nouveau l\'adresse email SVP!',
            'email.unique' => 'Cette adresse email est deja utilisée veillez renseigner un autre SVP!',
            'password.required' => 'Veillez saisir un mot de passe SVP!',
            'password.min' => 'Le Mot de passe doit avoir au minimun :min caractères.',
            'password.confirmed' => 'Les mots de passe ne sont pas identique.'
        ];
    }
}
