<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 m-b-15 header-title">Formulaire de Modification d'une dégustattion</h4>
                    <form method="post" action="{{route('degustations.update',$degust->id)}}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="form-row">
                            <label for="inputEmail4">Categorie</label>
                            <select class="form-control" name="categorie"  id="cat">
                                @if($data->isEmpty())
                                <option value="">Aucne catégorie enregistrée pour le moment</option>
                                @else
                                    <option value="">Selectionner une categorie</option>
                                    @foreach($data as $item)
                                        <option @if($degust->categorie_id == $item->id) selected @endif value="{{ $item->id }}">{{$item->libelle}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="1">Arome</label>
                                    <textarea class="form-control" name="arome" id="1" rows="3">@if(old('arome')){{ old('arome') }}@else{{ $degust->arome }} @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="inputEmail4">Note arome </label>
                                    <select class="form-control" name="note_arome">
                                        <option value="">Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option @if($degust->note_arome == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="2">Apparence</label>
                                    <textarea class="form-control"name="apparence" id="2" rows="3">@if(old('apparence')){{ old('apparence') }}@else{{ $degust->apparence }} @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="inputEmail4">Note apparence </label>
                                    <select class="form-control" name="note_apparence">
                                        <option value="">Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option @if($degust->note_apparence == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="3">Impression generale</label>
                                    <textarea class="form-control"name="impression" id="3" rows="3">@if(old('impression')){{ old('impression') }}@else{{ $degust->impression_generale }} @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="inputEmail4">Note impression </label>
                                    <select class="form-control" name="note_impression">
                                        <option value="">Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option @if($degust->note_impression_generale == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="4">Sensation </label>
                                    <textarea class="form-control"name="sensation" id="4" rows="3">@if(old('sensation')){{ old('sensation') }}@else{{ $degust->sensation }} @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="inputEmail4">Note sensation </label>
                                    <select class="form-control" name="note_sensation">
                                        <option value="">Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option @if($degust->note_sensation == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="5">Saveur</label>
                                    <textarea class="form-control"name="saveur" id="5" rows="3">@if(old('saveur')){{ old('saveur') }}@else{{ $degust->saveur }} @endif</textarea>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="inputEmail4">Note saveur </label>
                                    <select class="form-control" name="note_saveur">
                                        <option value="">Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option @if($degust->note_saveur == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Cochez les elements qui sont presentent dans la degustation</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->acetaldehyde == 1) checked @endif type="checkbox" name="acetaldehyde" value="1" id="1">
                                            <label class="form-check-label" for="1">
                                                acetaldehyde
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" @if($degust->alcoholic == 1) checked @endif name="alcoholic" value="1" id="2">
                                            <label class="form-check-label" for="2">
                                                alcoholic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->astringent == 1) checked @endif type="checkbox" name="astringent" value="1" id="3">
                                            <label class="form-check-label" for="3">
                                                astringent
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->dms == 1) checked @endif type="checkbox" name="dms" value="1" id="4">
                                            <label class="form-check-label" for="4">
                                                dms
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->diacetyl == 1) checked @endif type="checkbox" name="diacetyl" value="1" id="5">
                                            <label class="form-check-label" for="5">
                                                diacetyl
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->grassy == 1) checked @endif type="checkbox" name="grassy" value="1" id="6">
                                            <label class="form-check-label" for="6">
                                                grassy
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->light == 1) checked @endif type="checkbox" name="light" value="1" id="7">
                                            <label class="form-check-label" for="7">
                                                light-Struck
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->estery == 1) checked @endif type="checkbox" name="estery" value="1" id="8">
                                            <label class="form-check-label" for="8">
                                                estery
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->metallic == 1) checked @endif type="checkbox" name="metallic" value="1" id="9">
                                            <label class="form-check-label" for="9">
                                                metallic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->musty == 1) checked @endif type="checkbox" name="musty" value="1" id="10">
                                            <label class="form-check-label" for="10">
                                                musty
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->oxidized == 1) checked @endif type="checkbox" name="oxidized" value="1" id="11">
                                            <label class="form-check-label" for="11">
                                                oxidized
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->phenolic == 1) checked @endif type="checkbox" name="phenolic" value="1" id="12">
                                            <label class="form-check-label" for="12">
                                                phenolic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->solvent == 1) checked @endif type="checkbox" name="solvent" value="1" id="13">
                                            <label class="form-check-label" for="13">
                                                solvent
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->sour == 1) checked @endif type="checkbox" name="sour" value="1" id="14">
                                            <label class="form-check-label" for="14">
                                                sour/acidic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->sulfur == 1) checked @endif type="checkbox" name="sulfur" value="1" id="15">
                                            <label class="form-check-label" for="15">
                                                sulfur
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->vegetal == 1) checked @endif type="checkbox" name="vegetal" value="1" id="16">
                                            <label class="form-check-label" for="16">
                                                vegetal
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->yeasty == 1) checked @endif type="checkbox" name="yeasty" value="1" id="17">
                                            <label class="form-check-label" for="17">
                                                yeasty
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->stylistic_accuracy == 1) checked @endif type="checkbox" name="stylistic_accuracy" value="1" id="18">
                                            <label class="form-check-label" for="18">
                                                stylistic_accuracy
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->technical_merit == 1) checked @endif type="checkbox" name="technical_merit" value="1" id="19">
                                            <label class="form-check-label" for="19">
                                                technical_merit
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->intangibles == 1) checked @endif type="checkbox" name="intangibles" value="1" id="20">
                                            <label class="form-check-label" for="20">
                                                intangibles
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" @if($degust->technical_merit == 1) checked @endif type="checkbox" name="technical_merit" value="1" id="21">
                                            <label class="form-check-label" for="21">
                                                technical_merit
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="6">Photo</label>
                                <input type="file" class="form-control" id="6" name="photo">
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
    <script>


   
function recuperation_criteres(id) {
    id--;
    var data = "{{$data}}";
    data = data.replaceAll('&quot;', '"');
    let jsonObject = JSON.parse(data);
    return jsonObject[id];
}




$('#cat').change(function () {
    //Supprimer les eelement jadis charger
    var elements = document.getElementsByClassName("critereSelection");

    if(elements){
        var elements = document.getElementsByClassName("critereSelection");
        while(elements.length > 0){
            elements[0].parentNode.removeChild(elements[0]);
        }
    }

    var categorie = document.getElementById("cat");
    categorie = categorie.value;

    if(categorie !== ""){
        console.log(recuperation_criteres(categorie));
        var criteres = document.querySelectorAll(".critere");     

        criteres.forEach(
            critere => {
                var nom_critere = critere.textContent;
                var num_critere = document.createElement("div");
                    num_critere.classList.add("critereSelection");
                    num_critere.style.color = 'grey';
                    

                var textBD = recuperation_criteres(categorie)[nom_critere.toLowerCase()];
                var text = document.createTextNode(textBD);
    
                num_critere.appendChild(text);
                critere.appendChild(num_critere);
            }
        );
    }
});
</script>
@endsection
