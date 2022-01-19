<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentaireRequest;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = Commentaire::paginate(10);
        return view('admin.commentaires.index',compact('user','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentaireRequest $request)
    {
        $data = new Commentaire();
        $obj = new DegustationController();
        $user = Auth::user();
        $ref = $obj->random_reference(Commentaire::all());
        $data->reference = $ref;
        $data->degustation_id = $request->input('degustation');
        $data->libelle = $request->input('libelle');
        $data->user_id = $user->id;
        $data->save();
        return redirect()->route('degustations.show',$request->input('degustation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Commentaire::destroy($id);
        return redirect()->route('commentaires.index');
    }
}
