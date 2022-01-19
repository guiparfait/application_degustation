<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
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
            'libelle' => ['required','string','min:3'],
            'arome' => ['required','string','min:3'],
            'saveur' => ['required','string','min:3'],
            'apparence' => ['required','string','min:3'],
            'sensation' => ['required','string','min:3']
        ];
    }

    public function messages()
    {
        return [
            'libelle.required' => 'Entrer le nom de la categorie SVP!',
            'arome.required' => 'Entrer l\'arome de la categorie SVP!',
            'saveur.required' => 'Entrer la saveur de la categorie SVP!',
            'apparence.required' => 'Entrer l\'apparence de la categorie SVP!',
            'sensation.required' => 'Entrer la sensation de la categorie SVP!',
            'libelle.string' => 'Le nom doit être une chaine de caractère SVP!',
            'arome.string' => 'L\'arome doit être une chaine de caractère SVP!',
            'saveur.string' => 'La saveur doit être une chaine de caractère SVP!',
            'apparence.string' => 'L\'apparence doit être une chaine de caractère SVP!',
            'sensation.string' => 'La sensation doit être une chaine de caractère SVP!',
            'libelle.min' => 'le nom doit être composé d\'au moins :min caractères',
            'arome.min' => 'l\'arome doit être composé d\'au moins :min caractères',
            'saveur.min' => 'la saveur doit être composé d\'au moins :min caractères',
            'apparence.min' => 'l\'apparence doit être composé d\'au moins :min caractères',
            'sensation.min' => 'la sensation doit être composé d\'au moins :min caractères',
        ];
    }
}
