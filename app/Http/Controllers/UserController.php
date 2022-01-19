<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdentifiantRequest;
use App\Http\Requests\ProfilRequest;
use App\Http\Requests\UserRequest;
use App\Models\Commentaire;
use App\Models\Degustation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = User::paginate(5);
        $all = User::all()->count();
        $mbs = User::all()->where('role','Membre')->count();
        $adm = User::all()->where('role','Admin')->count();
        $tab = [
            'all' => $all,
            'mbs' => $mbs,
            'adm' => $adm
        ];
        if ($user->role != 'Admin') {
            return redirect()->route('users.show',$user->id);
        }
        return view('admin.users.index',compact('user','data','tab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $data = User::paginate(5);
        return view('admin.users.create', compact('data','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = new User();
        $data->nom = $request->input('nom');
        $data->prenom = $request->input('prenom');
        $data->email = $request->input('email');
        $data->role = 'Admin';
        $data->photo = 'images/users/avatar.png';
        $data->password = Hash::make('12345678');
        $data->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $data = User::findOrFail($id);
        $alldeg = Degustation::all();
        $allcom = Commentaire::all();
        $degusts = $alldeg->where('user_id', $id);
        $degust = Degustation::where('user_id', $id)->paginate(5);
        $comments = $allcom->where('user_id', $id);
        $comment = Commentaire::where('user_id', $id)->paginate(5);
        $lastdeguste = $degusts;
        if ($degusts->isNotEmpty()){
            $lastdeguste = $degusts->last();
        }
        $lastcom = $comments;
        if ($comments->isNotEmpty()){
            $lastcom = $comments->last();
        }
        $nb_degust = $degusts->count(); $nb_com = $comments->count();
        $dp = 0; $cp = 0;
        if ($nb_degust != 0) { $dp = ($nb_degust*100)/$alldeg->count();}
        if ($nb_com != 0) { $cp = ($nb_com*100)/$allcom->count();}
        $stats = [
            'nb_degust' => $nb_degust,
            'nb_com' => $nb_com,
            'dp' => $dp,
            'cp' => $cp,
        ];
        return view('admin.users.show', compact('user','data','degust','lastdeguste','comment','lastcom','stats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $data = User::findOrFail($id);
        $profil = true;
        return view('admin.users.edit',compact('user','profil','data'));
    }


    public function editprofil($id)
    {
        $user = Auth::user();
        $data = User::findOrFail($id);
        $profil = false;
        return view('admin.users.edit',compact('user','profil','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfilRequest $request, User $user)
    {
        $data = User::findOrFail($user->id);
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('profil', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de votre photo doit être un ".png" ou ".jpg" ou ".jpeg"');
                return redirect()->route('users.edit',$user->id);
            }
        }else{
            $photo = $data->photo;
        }
        $data->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'photo' => $photo,
            ]);
        return redirect()->route('users.show',$data->id);
    }
    public function updateprofile(IdentifiantRequest $request, $user)
    {
        $data = User::findOrFail($user);
        if($request->input('email') != $request->input('confmail')){
            session()->flash('confmail','Les deux adresses email ne sont pas identique');
            return redirect()->route('profils.edit', $data->id);
        }
        $data->update([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            ]);
        return redirect()->route('users.show',$data->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function role($id)
    {
        $data = User::findOrFail($id);
        $role = ($data->role == 'Admin') ? 'Membre' : 'Admin' ;
        $data->update([
            'role' => $role,
            ]);
        return redirect()->route('users.index');

    }

    public function deconnection()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
