<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use App\Models\Degustation;
use App\Models\Commentaire;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $act = 'home';
        $degustations = Degustation::homeDegustation();
        $categories = Categorie::homeCategorie();
        $cm = User::all()->count();
        $cd = Degustation::all()->count();
        $cc = Commentaire::all()->count();
        $commentaire = Commentaire::homeCommentaire();
        return view('clients.index', compact('categories','degustations','cm','cd','cc','commentaire','act'));


    }

    public function dashboard()
    {
        $user = Auth::user();
        $md = Degustation::where('user_id', $user->id)->count();
        $td = Degustation::all()->count();
        $cm = Commentaire::all()->count();
        $mb = User::all()->count();
        $tab = [
            'md' => $md,
            'td' => $td,
            'cm' => $cm,
            'mb' => $mb,
            'te' => 1,
        ];
        $lastdeguste = Degustation::all()->last();
        $test = 1;
        if (empty($lastdeguste->id)) {
            $tab['te'] = 0;
        }
        return view('admin.index',compact('user','tab','lastdeguste'));
    }

    public function categorie()
    {
        $act = 'cat';
        $data = Categorie::paginate(9);
        return view('clients.categories.index',compact('data','act'));
    }

    public function categorie_show($id)
    {
        $act = 'cat';
        $data = Categorie::findOrFail($id);
        return view('clients.categories.show', compact('data','act'));
    }

    public function developpeur()
    {
        $act = 'dev';
        $tab[] =
        [
            'id' => 1,
            'civil' => 'M.',
            'nom' => 'ANZIAN',
            'prenom' => 'Yannick',
            'post' => 'Chef de Projet',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'yannanzian@gmail.com',
            'tel' => '+33 7 58 76 01 83',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Je suis actuellement étudiant en Master 1 MIAGE de l\'Université Rennes 1. Je suis passionné par le développement logiciel, la data et des nouvelles technologies. Rigoureux, actif, créatif, dynamique, je souhaite intégrer une équipe de développement afin de mettre en application mes compétences et améliorer mes qualités',
            'photo' => 'clients/images/1.png'
        ];
        $tab[] = [
            'id' => 2,
            'civil' => 'M.',
            'nom' => 'GUI',
            'prenom' => 'Parfait',
            'post' => 'Développeur Back-end',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'guiparfaittresor@gmail.com',
            'tel' => '+33 7 49 74 50 48',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Je suis actuellement étudiant en Master 1 MIAGE à l\'Université Rennes 1. Je suis passionné par le développement, la data, la gestion de projet et des nouvelles technologies. Rigoureux, actif, créatif, dynamique, je souhaite intégrer une équipe de développement afin de mettre en application mes compétences et améliorer mes qualités',
            'photo' => 'clients/images/2.png'
        ];
        $tab[] = [
            'id' => 3,
            'civil' => 'M.',
            'nom' => 'SYL',
            'prenom' => 'Coventon',
            'post' => 'Développeur Back-end',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'xxxxxxxxxxxx@gmail.com',
            'tel' => '+33 x xx xx xx xx',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nisi repellat fuga! Labore eaque a sint fugiat! Ipsum perspiciatis accusantium sunt reprehenderit cupiditate voluptas, debitis earum soluta, dolor numquam facere.',
            'photo' => 'clients/images/5.png'
        ];
        $tab[] = [
            'id' => 4,
            'civil' => 'Mlle.',
            'nom' => 'BERTE',
            'prenom' => 'Lydia',
            'post' => 'Développeur Front-end',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'xxxxxxxxxxxx@gmail.com',
            'tel' => '+33 x xx xx xx xx',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nisi repellat fuga! Labore eaque a sint fugiat! Ipsum perspiciatis accusantium sunt reprehenderit cupiditate voluptas, debitis earum soluta, dolor numquam facere.',
            'photo' => 'clients/images/3.png'
        ];
        $tab[] = [
            'id' => 5,
            'civil' => 'M.',
            'nom' => 'BLE',
            'prenom' => 'Anderson',
            'post' => 'Développeur Front-end',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'xxxxxxxxxxxx@gmail.com',
            'tel' => '+33 x xx xx xx xx',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nisi repellat fuga! Labore eaque a sint fugiat! Ipsum perspiciatis accusantium sunt reprehenderit cupiditate voluptas, debitis earum soluta, dolor numquam facere.',
            'photo' => 'clients/images/4.png'
        ];
        $tab[] = [
            'id' => 6,
            'civil' => 'Mlle.',
            'nom' => 'SANOGO',
            'prenom' => 'Kadidiatou',
            'post' => 'Développeur Front-end',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'xxxxxxxxxxxx@gmail.com',
            'tel' => '+33 x xx xx xx xx',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nisi repellat fuga! Labore eaque a sint fugiat! Ipsum perspiciatis accusantium sunt reprehenderit cupiditate voluptas, debitis earum soluta, dolor numquam facere.',
            'photo' => 'clients/images/6.png'
        ];
        $tab[] = [
            'id' => 7,
            'civil' => 'M.',
            'nom' => 'FOFANA',
            'prenom' => 'Mohamed',
            'post' => 'Développeur',
            'niveau' => 'MASTER 1 MIAGE',
            'ecole' => 'Université de Rennes 1',
            'email' => 'xxxxxxxxxxxx@gmail.com',
            'tel' => '+33 x xx xx xx xx',
            'loger' => '10 Rue Louis Arretche, 35700 RENNES',
            'avis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nisi repellat fuga! Labore eaque a sint fugiat! Ipsum perspiciatis accusantium sunt reprehenderit cupiditate voluptas, debitis earum soluta, dolor numquam facere.',
            'photo' => 'clients/images/7.png'
        ];
        session(['devs' => $tab]);
        return view('clients.developpeur.index',compact('tab','act'));
    }

    public function developpeur_show($id)
    {
        $act = 'dev';
        $i = $id - 1;
        $tab = session('devs');
        $data = $tab[$i];
        return view('clients.developpeur.show',compact('data','act'));
    }

    public function degustation()
    {
        $act = 'deg';
        $data = Degustation::paginate(9);
        return view('clients.degustations.index', compact('data','act'));
    }


    public function degustation_show($id)
    {
        $act = 'deg';
        $data = Degustation::findOrFail($id);
        return view('clients.degustations.show', compact('data','act'));
    }
}
