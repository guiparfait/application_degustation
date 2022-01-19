<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Degustation;
use Illuminate\Http\Request;
use App\Http\Requests\CategorieRequest;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = Categorie::paginate(5);
        return view('admin.categories.index', compact('user','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $data = Categorie::paginate(15);
        return view('admin.categories.create', compact('user','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        $data = new Categorie();
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('categorie', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de l\'image doit être un ".png" ou ".jpg" ou ".jpeg"');
                return redirect()->route('categories.create');
            }
        }else{
            $photo = 'images/b1.jpg';
        }
        $data->libelle = $request->input('libelle');
        $data->arome = $request->input('arome');
        $data->saveur = $request->input('saveur');
        $data->apparence = $request->input('apparence');
        $data->sensation = $request->input('sensation');
        $data->photo = $photo;
        $data->save();
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $data = Categorie::findOrFail($id);
        $alldeg = Degustation::all();
        $degusts = $alldeg->where('categorie_id', $id);
        $degust = Degustation::where('categorie_id', $id)->paginate(5);
        $lastdeguste = $degusts;
        if ($degusts->isNotEmpty()){
            $lastdeguste = $degusts->last();
        }
        $nb_degust = $degusts->count();
        $dp = 0; $cp = 0;
        if ($nb_degust != 0) { $dp = ($nb_degust*100)/$alldeg->count();}
        return view('admin.categories.show', compact('user','data','degust','lastdeguste','nb_degust','dp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $data = Categorie::paginate(15);
        $datas = Categorie::findOrFail($id);
        return view('admin.categories.edit', compact('user','data','datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $id)
    {
        $data = Categorie::findOrFail($id);
        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $images =['jpg','jpeg','png'];
            if (in_array($extension,$images)) {
                $files = $file->store('categorie', 'public');
                $photo = 'storage/'.$files;
            }else {
                session()->flash('photo', 'L\'extenxion de l\'image doit être un ".png" ou ".jpg" ou ".jpeg"');
                return redirect()->route('categories.edit',$data->id);
            }
        }else{
            $photo = $data->photo;
        }
        $data->update([
            'libelle' => $request->input('libelle'),
            'arome' => $request->input('arome'),
            'sensation' => $request->input('sensation'),
            'apparence' => $request->input('apparence'),
            'saveur' => $request->input('saveur'),
            'photo' => $photo,
            ]);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $degust = Categorie::findOrFail($id);
        if ($degust->degustations->count()!=0) {
            foreach ($degust->degustations as $item) {
                if ($item->commentaires->count()!=0) {
                    foreach ($item->commentaires as $value) {
                        Commentaire::destroy($value->id);
                    }
                }
                Degustation::destroy($item->id);
            }
        }
        Categorie::destroy($id);
        return redirect()->route('categories.index');
    }
}
