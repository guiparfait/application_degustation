<?php

namespace App\Http\Controllers;

use App\Http\Requests\DegustationRequest;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Degustation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DegustationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $alldeg = Degustation::all();
        $degust = Degustation::paginate(15);
        $lastdeguste = $alldeg;
        $n = 0;
        if ($alldeg->isNotEmpty()){
            $lastdeguste = $alldeg->last();
            $n = 1;
        }
        return view('admin.degustations.index', compact('user','degust','n','lastdeguste'));
    }
    public function unique()
    {
        $user = Auth::user();
        $data = Degustation::where('user_id',$user->id)->paginate(5);
        return view('admin.degustations.unique',compact('user','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $data = Categorie::all();
        $datas = Degustation::where('user_id',$user->id)->paginate(15);
        return view('admin.degustations.create',compact('user','data','datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DegustationRequest $request)
    {
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('degustation', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de l\'image doit être un ".png" ou ".jpg" ou ".jpeg"');
                return redirect()->route('degustation.create');
            }
        }else{
            $photo = 'images/bg5.jpg';
        }
        $refernce = $this->random_reference(Degustation::all());
        $data = new Degustation();
        $data->reference = $refernce;
        $data->categorie_id = $request->input('categorie');
        $data->arome = $request->input('arome');
        $data->apparence = $request->input('apparence');
        $data->impression_generale = $request->input('impression');
        $data->saveur = $request->input('saveur');
        $data->sensation = $request->input('sensation');
        $data->note_arome = $request->input('note_arome');
        $data->note_saveur = $request->input('note_saveur');
        $data->note_apparence = $request->input('note_apparence');
        $data->note_sensation = $request->input('note_sensation');
        $data->note_impression_generale = $request->input('note_impression');
        if (!empty($request->input('acetaldehyde'))) {
            $data->acetaldehyde = $request->input('acetaldehyde');
        }
        if (!empty($request->input('alcoholic'))) {
            $data->alcoholic = $request->input('alcoholic');
        }
        if (!empty($request->input('astringent'))) {
            $data->astringent = $request->input('astringent');
        }
        if (!empty($request->input('dms'))) {
            $data->dms = $request->input('dms');
        }
        if (!empty($request->input('diacetyl'))) {
            $data->diacetyl = $request->input('diacetyl');
        }
        if (!empty($request->input('grassy'))) {
            $data->grassy = $request->input('grassy');
        }
        if (!empty($request->input('metallic'))) {
            $data->metallic = $request->input('metallic');
        }
        if (!empty($request->input('light'))) {
            $data->light_Struck = $request->input('light');
        }
        if (!empty($request->input('estery'))) {
            $data->estery = $request->input('estery');
        }
        if (!empty($request->input('musty'))) {
            $data->musty = $request->input('musty');
        }
        if (!empty($request->input('oxidized'))) {
            $data->oxidized = $request->input('oxidized');
        }
        if (!empty($request->input('phenolic'))) {
            $data->phenolic = $request->input('phenolic');
        }
        if (!empty($request->input('solvent'))) {
            $data->solvent = $request->input('solvent');
        }
        if (!empty($request->input('sour'))) {
            $data->sour_acidic = $request->input('sour');
        }
        if (!empty($request->input('sulfur'))) {
            $data->sulfur = $request->input('sulfur');
        }
        if (!empty($request->input('vegetal'))) {
            $data->vegetal = $request->input('vegetal');
        }
        if (!empty($request->input('yeasty'))) {
            $data->yeasty = $request->input('yeasty');
        }
        if (!empty($request->input('stylistic_accuracy'))) {
            $data->stylistic_accuracy = $request->input('stylistic_accuracy');
        }
        if (!empty($request->input('technical_merit'))) {
            $data->technical_merit = $request->input('technical_merit');
        }
        if (!empty($request->input('intangibles'))) {
            $data->intangibles = $request->input('intangibles');
        }
        $data->photo = $photo;
        $user = Auth::user();
        $data->user_id = $user->id;
        $data->save();
        return  redirect()->route('dashboard.degustations');

    }
    function random_reference($data) {
        $length = 8;
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $oldReference= $data;
        do {
            $newReference = substr( str_shuffle( $chars ), 0, $length );
            $a = 0;
            foreach ($oldReference as $value) {
                if ($value->reference == $newReference) {
                    $a +=1;
                }
            }
        } while ($a >= 1);
        return $newReference;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Degustation  $degustation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $data = Degustation::findOrFail($id);
        return view('admin.degustations.show',compact('user','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Degustation  $degustation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $data = Categorie::all();
        $datas = Degustation::paginate(15);
        $degust = Degustation::findOrFail($id);
        return view('admin.degustations.edit',compact('user','data','datas','degust'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Degustation  $degustation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Degustation::findOrFail($id);
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('degustation', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de l\'image doit être un ".png" ou ".jpg" ou ".jpeg"');
                return redirect()->route('degustation.create');
            }
        }else{
            $photo = $data->photo;
        }
        $refernce = $data->reference;

        if (!empty($request->input('acetaldehyde'))) {
            $acetaldehyde = $request->input('acetaldehyde');
        }else{
            $acetaldehyde = 0;
        }
        if (!empty($request->input('alcoholic'))) {
            $alcoholic = $request->input('alcoholic');
        }else{
            $alcoholic = 0;
        }
        if (!empty($request->input('astringent'))) {
            $astringent = $request->input('astringent');
        }else{
            $astringent = 0;
        }
        if (!empty($request->input('dms'))) {
            $dms = $request->input('dms');
        }else{
            $dms = 0;
        }
        if (!empty($request->input('diacetyl'))) {
            $diacetyl = $request->input('diacetyl');
        }else{
            $diacetyl = 0;
        }
        if (!empty($request->input('grassy'))) {
            $grassy = $request->input('grassy');
        }else{
            $grassy = 0;
        }
        if (!empty($request->input('metallic'))) {
            $metallic = $request->input('metallic');
        }else{
            $metallic = 0;
        }
        if (!empty($request->input('light'))) {
            $light_Struck = $request->input('light');
        }else{
            $light_Struck = 0;
        }
        if (!empty($request->input('estery'))) {
            $estery = $request->input('estery');
        }else{
            $estery = 0;
        }
        if (!empty($request->input('musty'))) {
            $musty = $request->input('musty');
        }else{
            $musty = 0;
        }
        if (!empty($request->input('oxidized'))) {
            $oxidized = $request->input('oxidized');
        }else{
            $oxidized = 0;
        }
        if (!empty($request->input('phenolic'))) {
            $phenolic = $request->input('phenolic');
        }else{
            $phenolic = 0;
        }
        if (!empty($request->input('solvent'))) {
            $solvent = $request->input('solvent');
        }else{
            $solvent = 0;
        }
        if (!empty($request->input('sour'))) {
            $sour_acidic = $request->input('sour');
        }else{
            $sour_acidic = 0;
        }
        if (!empty($request->input('sulfur'))) {
            $sulfur = $request->input('sulfur');
        }else{
            $sulfur = 0;
        }
        if (!empty($request->input('vegetal'))) {
            $vegetal = $request->input('vegetal');
        }else{
            $vegetal = 0;
        }
        if (!empty($request->input('yeasty'))) {
            $yeasty = $request->input('yeasty');
        }else{
            $yeasty = 0;
        }
        if (!empty($request->input('stylistic_accuracy'))) {
            $stylistic_accuracy = $request->input('stylistic_accuracy');
        }else{
            $stylistic_accuracy = 0;
        }
        if (!empty($request->input('technical_merit'))) {
            $technical_merit = $request->input('technical_merit');
        }else{
            $technical_merit = 0;
        }
        if (!empty($request->input('intangibles'))) {
            $intangibles = $request->input('intangibles');
        }else{
            $intangibles = 0;
        }
        $user = Auth::user();
        $data->update([
            'refernce' => $refernce,
            'categorie' => $request->input('categorie'),
            'arome' => $request->input('arome'),
            'apparence' => $request->input('apparence'),
            'impression_generale' => $request->input('impression'),
            'saveur' => $request->input('saveur'),
            'sensation' => $request->input('sensation'),
            'note_arome' => $request->input('note_arome'),
            'note_saveur' => $request->input('note_saveur'),
            'note_apparence' => $request->input('note_apparence'),
            'note_sensation' => $request->input('note_sensation'),
            'note_impression_generale' => $request->input('note_impression'),
            'acetaldehyde' => $acetaldehyde,
            'alcoholic' => $alcoholic,
            'astringent' => $astringent,
            'dms' => $dms,
            'diacetyl' => $diacetyl,
            'grassy' => $grassy,
            'metallic' => $metallic,
            'light_Struck' => $light_Struck,
            'estery' => $estery,
            'musty' => $musty,
            'oxidized' => $oxidized,
            'phenolic' => $phenolic,
            'solvent' => $solvent,
            'sour_acidic' => $sour_acidic,
            'sulfur' => $sulfur,
            'vegetal' => $vegetal,
            'yeasty' => $yeasty,
            'stylistic_accuracy' => $stylistic_accuracy,
            'technical_merit' => $technical_merit,
            'intangibles' => $intangibles,
            'photo' => $photo,
            'user_id' => $user->id
        ]);
        return  redirect()->route('degustations.index');
    }
    public function liste()
    {
        $user = Auth::user();
        $data = Degustation::paginate(25);
        return view('admin.degustations.liste', compact('user','data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Degustation  $degustation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $com = Degustation::findOrFail($id);
        if ($com->commentaires->count()!=0) {
            foreach ($com->commentaires as $item) {
                Commentaire::destroy($item->id);
            }
        }
        Degustation::destroy($id);
        if ($request->input('sens')=='zonechef') {
            return redirect()->route('dashboard.degustations.list');
        }
        return redirect()->route('dashboard.degustations');
    }
}
