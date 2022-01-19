<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<<<<<<< Updated upstream
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="mini-stat clearfix bg-white">
                <span class="mini-stat-icon"><i class="ti-user"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">15852</span> Utilisateurs
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="mini-stat clearfix bg-orange">
                <span class="mini-stat-icon"><i class="ti-crown"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">5210</span> Administrateurs
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="mini-stat clearfix bg-info">
                <span class="mini-stat-icon"><i class="ti-id-badge"></i></span>
                <div class="mini-stat-info text-right text-light">
                    <span class="counter text-white">20544</span> Membres
                </div>
=======
<div class="row">

    <div class="col-md-7">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Liste</h4>   
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="button" class="btn btn-default waves-effect waves-light"><i class="ti-plus"></i> Ajouter</button>
                    </div>
                </div>  
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr class="titles">
                                    <th>#</th>
                                    <th>Intitulé</th>
                                    <th>Arome</th>
                                    <th>Saveur</th>
                                    <th>Apparence</th>
                                    <th>Sensation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >1</td>
                                    <td >Blonde</td>
                                    <td >arome blonde</td>
                                    <td >saveur blonde</td>
                                    <td >apparence blonde</td>
                                    <td >sensation blonde</td>
                                    <td ><a href="#" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                                    <button type="button" title="Voir" class="btn btn-default waves-effect waves-light"><i class="ti-eye"></i></button> 
                                    <button type="button" title="Supprimer" class="btn btn-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td >2</td>
                                    <td >Blanche</td>
                                    <td >arome blanche</td>
                                    <td >saveur blanche</td>
                                    <td >apparence blanche</td>
                                    <td >sensation blanche</td>
                                    <td ><a href="#" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a> 
                                    <button type="button" title="Voir" class="btn btn-default waves-effect waves-light"><i class="ti-eye"></i></button> 
                                    <button type="button" title="Supprimer" class="btn btn-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td >3</td>
                                    <td >Belge</td>
                                    <td >arome belge</td>
                                    <td >saveur belge</td>
                                    <td >apparence belge</td>
                                    <td >sensation belge</td>
                                    <td ><a href="#" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                                    <button type="button" title="Voir" class="btn btn-default waves-effect waves-light"><i class="ti-eye"></i></button> 
                                    <button type="button" title="Supprimer" class="btn btn-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td >4</td>
                                    <td >Noire</td>
                                    <td >arome noire</td>
                                    <td >saveur noire</td>
                                    <td >apparence noire</td>
                                    <td >sensation noire</td>
                                    <td ><a href="#" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a> 
                                    <button type="button" title="Voir" class="btn btn-default waves-effect waves-light"><i class="ti-eye"></i></button> 
                                    <button type="button" title="Supprimer" class="btn btn-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td >5</td>
                                    <td >Brune</td>
                                    <td >arome brune</td>
                                    <td >saveur brune</td>
                                    <td >apparence brune</td>
                                    <td >sensation brune</td>
                                    <td ><a href="#" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a> 
                                    <button type="button" title="Voir" class="btn btn-default waves-effect waves-light"><i class="ti-eye"></i></button> 
                                    <button type="button" title="Supprimer" class="btn btn-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td >6</td>
                                    <td >Rousse</td>
                                    <td >arome rousse</td>
                                    <td >saveur rousse</td>
                                    <td >apparence rousse</td>
                                    <td >sensation rousse</td>
                                    <td ><a href="#" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a>
                                    <button type="button" title="Voir" class="btn btn-default waves-effect waves-light"><i class="ti-eye"></i></button> 
                                    <button type="button" title="Supprimer" class="btn btn-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>                                               
>>>>>>> Stashed changes
            </div>
        </div>
    </div>

<<<<<<< Updated upstream
    <div class="row">
        <div class="col-xl-7">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 m-b-15 header-title">Toutes les dégustations</h4>
                    <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-2"></div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <input type="text" disabled required class="form-control" name="" placeholder="Recherche">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" title="Recherche" class="btn btn-outline-default wave-effect wave-light"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-default wave-effect wave-light"><i class="ti-plus"> Ajouter un Administrateur</i></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr class="titles">
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénoms</th>
                                <th>Roles</th>
                                <th>Actions</th>
                            </tr>

                            </thead>
                            <tbody>
                            <tr>
                                <td>2</td>
                                <td>Dribble</td>
                                <td>INV-001001</td>
                                <td>2011/04/25</td>
                                <td><button type="button" title="Supprimer" class="btn btn-outline-default wave-effect wave-light"><i class="ti-trash"></i></button>
                                    <button type="button" title="Détails" class="btn btn-outline-default wave-effect wave-light"><i class="ti-eye"></i></button>
                                    <button type="button" title="modifier" class="btn btn-outline-default wave-effect wave-light"><i class="ti-pencil-alt"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Accountant</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td> <td><button type="button" title="Supprimer" class="btn btn-outline-default wave-effect wave-light"><i class="ti-trash"></i></button>
                                    <button type="button" title="Détails" class="btn btn-outline-default wave-effect wave-light"><i class="ti-eye"></i></button>
                                    <button type="button" title="modifier" class="btn btn-outline-default wave-effect wave-light"><i class="ti-pencil-alt"></i></button>
                                </td>
                            </tr>
                            <td>
                            <td>4</td>
                            <td>Junior Technical Author</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                            <td><button type="button" title="Supprimer" class="btn btn-outline-default wave-effect wave-light"><i class="ti-trash"></i></button></td>
                            <td><button type="button" title="Détails" class="btn btn-outline-default wave-effect wave-light"><i class="ti-eye"></i></button>
                                <button type="button" title="modifier" class="btn btn-outline-default wave-effect wave-light"><i class="ti-pencil-alt"></i></button>
                            </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Senior Javascript Developer</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td><button type="button" title="Supprimer" class="btn btn-outline-default wave-effect wave-light"><i class="ti-trash"></i></button>
                                    <button type="button" title="Détails" class="btn btn-outline-default wave-effect wave-light"><i class="ti-eye"></i></button>
                                    <button type="button" title="modifier" class="btn btn-outline-default wave-effect wave-light"><i class="ti-pencil-alt"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-5">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 m-b-15 header-title">Nouvelle dégustattion</h4>
                    <form method="post" action="{{route('degustations.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <label for="inputEmail4">Categorie</label>
                            <select class="form-control" name="categorie">
                                @if($data->isEmpty())
                                    <option value="">Aucne catégorie enregistrée pour le moment</option>
                                @else
                                    @foreach($data as $item)
                                        <option value="{{ $item->id }}">{{$item->libelle}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-row">
                            <label for="inputPassword4">Arome</label>
                            <textarea class="form-control" name="arome" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="inputPassword4">Apparence</label>
                            <textarea class="form-control"name="apparence" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="inputPassword4">Impression generale</label>
                            <textarea class="form-control"name="impression_generale" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="inputPassword4">Sensation generale</label>
                            <textarea class="form-control"name="sensation_generale" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="inputPassword4">Sensation </label>
                            <textarea class="form-control"name="sensation" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label for="inputEmail4">Note arome </label>
                                    <select class="form-control" name="note_arome">
                                        <option selected>donner une note</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label for="inputEmail4">Note saveur</label>
                                    <select class="form-control" name ="note_saveur">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label for="inputEmail4">Note apparence </label>
                                    <select class="form-control" name="note_apparence">
                                        <option selected>donner une note</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <label for="inputEmail4">Note impression generale</label>
                                    <select class="form-control" name="impression_generale">
                                        <option selected>donner une note</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputPassword4">Photo</label>
                                <input type="file" class="form-control" id="exampleFormControlFile1" name="photo">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="acetaldehyde" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            acetaldehyde
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="alcoholic" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            alcoholic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="astringent" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            astringent
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="dms" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            dms
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="diacetyl" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            diacetyl
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="grassy" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            grassy
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="light" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            light-Struck
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="estery" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            estery
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="metallic" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            metallic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="musty" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            musty
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="oxidized" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            oxidized
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="phenolic" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            phenolic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="solvent" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            solvent
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sour" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            sour/acidic
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="sulfur" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            sulfur
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="vegetal" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            vegetal
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="yeasty" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            yeasty
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="stylistic_accuracy" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            stylistic_accuracy
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="technical_merit" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            technical_merit
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="intangibles" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            intangibles
                                        </label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="technical_merit" value="1" id="flexCheckIndeterminate">
                                        <label class="form-check-label" for="flexCheckIndeterminate">
                                            technical_merit
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Ajouter"/>
                            <input type="reset" class="btn btn-danger" value="Annuler"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=======
    </div>
    <div class="col-md-5">
        <div class="card m-b-30">
            <div class="card-body">
        
                <h4 class="mt-0 m-b-15 header-title">Formulaire d'Ajout d'une catégorie</h4>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="nom">Libellé</label>
                        <input type="text" class="form-control" id="libelle" name="libellé" required placeholder="Entrez le libellé">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Arome</label>
                        <input type="text" class="form-control" id="arome" name="Arome" required placeholder="Entrez l'arome">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Saveur</label>
                        <input type="text" class="form-control" id="saveur" name="saveur" required placeholder="Entrez la saveur">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Apparence</label>
                        <input type="text" class="form-control" id="apparence" name="Apparence" required placeholder="Entrez l'apparence">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Sensation</label>
                        <input type="text" class="form-control" id="sensation" name="Sensation" required placeholder="Entrez la sensation">
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-primary wave-effect wave-light">Ajouter</button>
                        <a href="#" class="btn btn-outline-danger wave-effect wave-light">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
                          
        
</div>
>>>>>>> Stashed changes
@endsection
