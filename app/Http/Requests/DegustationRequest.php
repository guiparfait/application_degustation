<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DegustationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Mettre à true pour accepter les données.
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
            'categorie'       => ['required', 'integer'],
            'arome'           => ['required','string','min:3'],
            'apparence'       => ['required','string','min:3'],
            'impression'      => ['required','string','min:3'],
            'saveur'          => ['required','string','min:3'],
            'sensation'       => ['required','string','min:3'],
            'note_sensation'  => ['required','integer'],
            'note_impression' => ['required','integer'],
            'note_arome'      =>  ['required', 'integer'],
            'note_saveur'     =>  ['required', 'integer'],
            'note_apparence'  =>  ['required', 'integer'] ,

        ];
    }
    

    public function messages()
    {
        return [
            'impression.required' => 'Entrer votre impression de la dégustation SVP!',
            'arome.required' => 'Entrer l\'arome de la dégustation SVP!',
            'saveur.required' => 'Entrer la saveur de la dégustation SVP!',
            'apparence.required' => 'Entrer l\'apparence de la dégustation SVP!',
            'sensation.required' => 'Entrer la sensation de la dégustation SVP!',
            'impression.string' => 'L\'impression doit être une chaine de caractère SVP!',
            'arome.string' => 'L\'arome doit être une chaine de caractère SVP!',
            'saveur.string' => 'La saveur doit être une chaine de caractère SVP!',
            'apparence.string' => 'L\'apparence doit être une chaine de caractère SVP!',
            'sensation.string' => 'La sensation doit être une chaine de caractère SVP!',
            'impression.min' => 'l\'impression doit être composé d\'au moins :min caractères',
            'arome.min' => 'l\'arome doit être composé d\'au moins :min caractères',
            'saveur.min' => 'la saveur doit être composé d\'au moins :min caractères',
            'apparence.min' => 'l\'apparence doit être composé d\'au moins :min caractères',
            'sensation.min' => 'la sensation doit être composé d\'au moins :min caractères',
            'note_arome.integer' => 'Veillez selectionner une note SVP!',
            'note_apparence.integer' => 'Veillez selectionner une note SVP!',
            'note_impression.integer' => 'Veillez selectionner une note SVP!',
            'note_saveur.integer' => 'Veillez selectionner une note SVP!',
            'note_sensation.integer' => 'Veillez selectionner une note SVP!',
            'categorie.required' => 'veillez selectionner une categorie SVP!',
        ];
    }
}
