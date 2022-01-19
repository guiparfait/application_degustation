<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => ['required', 'string','min:3', 'max:255'],
            'prenom' => ['required', 'string','min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'nom.required' => 'Veillez Entrer votre Nom SVP!',
            'nom.string' => 'Le nom doit etre une chaine de caractère.',
            'nom.min' => 'Le nom doit avoir au minimun :min caractères.',
            'prenom.required' => 'Veillez Entrer votre/vos prenom(s) SVP!',
            'prenom.string' => 'Le/les prenom doit(vent) etre une/des chaine de caractère.',
            'prenom.min' => 'Le/les prenom(s) doit(vent) avoir au minimun :min caractères.',
            'email.email' => 'Veillez Entrer une adresse email valide SVP!',
            'email.required' => 'Veiller Entrer une adresse email SVP!',
            'email.unique' => 'Cette adresse email est deja utilisée veillez renseigner un autre SVP!',
            'password.required' => 'Veillez saisir un mot de passe SVP!',
            'password.min' => 'Le Mot de passe doit avoir au minimun :min caractères.',
            'password.confirmed' => 'Les mots de passe ne sont pas identique.'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // dd($data);
        return User::create([
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'email' => $data['email'],
            'photo' => 'images/users/avatar.png',
            'role' => 'Membre',
            'password' => Hash::make($data['password']),
        ]);
    }
}
