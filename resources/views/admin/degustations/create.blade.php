<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 m-b-15 header-title">Formulaire d'Ajout d'une dégustattion</h4>
                    <form method="post" action="{{route('degustations.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <label for="cat">Categorie</label>
                            <select class="form-control @error('categorie') is-invalid @enderror" id="cat" name="categorie">
                                @if($data->isEmpty())
                                <option value="">Aucne catégorie enregistrée pour le moment</option>
                                @else
                                    <option value="">Selectionner une categorie</option>
                                    @foreach($data as $item)
                                        <option value="{{ $item->id }}">{{$item->libelle}}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('categorie')
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="arome" class="critere">Arome</label>

                                    <textarea class="form-control @error('arome') is-invalid @enderror" name="arome" id="arome" rows="3"></textarea>
                                </div>
                                @error('arome')
                                    <span class="h6" style="color: red; font-style:italic;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="inputEmail4">Note arome </label>
                                    <select class="form-control @error('note_arome') is-invalid @enderror" name="note_arome">
                                        <option selected>Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    @error('note_arome')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="ap" class="critere">Apparence</label>
                                    <textarea class="form-control @error('apparence') is-invalid @enderror" name="apparence" id="ap" rows="3"></textarea>
                                    @error('apparence')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="nap">Note apparence </label>
                                    <select class="form-control @error('note_apparence') is-invalid @enderror" id="nap" name="note_apparence">
                                        <option selected>Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    @error('note_apparence')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="imp" class="critere">Impression generale</label>
                                    <textarea class="form-control @error('impression') is-invalid @enderror" name="impression" id="imp" rows="3"></textarea>
                                    @error('impression')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="ni">Note impression </label>
                                    <select class="form-control @error('note_impression') is-invalid @enderror" id="ni" name="note_impression">
                                        <option selected>Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    @error('note_impression')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="se" class="critere">Sensation</label>
                                    <textarea class="form-control @error('sensation') is-invalid @enderror" name="sensation" id="se" rows="3"></textarea>
                                    @error('sensation')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="ns">Note sensation </label>
                                    <select class="form-control @error('note_sensation') is-invalid @enderror" id="ns" name="note_sensation">
                                        <option selected>Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    @error('note_sensation')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-row">
                                    <label for="sa" class="critere">Saveur</label>
                                    <textarea class="form-control @error('saveur') is-invalid @enderror" name="saveur" id="sa" rows="3"></textarea>
                                    @error('saveur')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-row">
                                    <label for="nsa">Note saveur </label>
                                    <select class="form-control @error('note_saveur') is-invalid @enderror" id="nsa" name="note_saveur">
                                        <option selected>Selectionner une note</option>
                                        @for($i = 1; $i <= 10; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                    @error('note_saveur')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label>Cochez les elements qui sont presentent dans la degustation</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="acetaldehyde" value="1" id="1">
                                            <label class="form-check-label" for="1">
                                                acetaldehyde
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="alcoholic" value="1" id="2">
                                            <label class="form-check-label" for="2">
                                                alcoholic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="astringent" value="1" id="3">
                                            <label class="form-check-label" for="3">
                                                astringent
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="dms" value="1" id="4">
                                            <label class="form-check-label" for="4">
                                                dms
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="diacetyl" value="1" id="5">
                                            <label class="form-check-label" for="5">
                                                diacetyl
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="grassy" value="1" id="6">
                                            <label class="form-check-label" for="6">
                                                grassy
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="light" value="1" id="7">
                                            <label class="form-check-label" for="7">
                                                light-Struck
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="estery" value="1" id="8">
                                            <label class="form-check-label" for="8">
                                                estery
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="metallic" value="1" id="9">
                                            <label class="form-check-label" for="9">
                                                metallic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="musty" value="1" id="10">
                                            <label class="form-check-label" for="10">
                                                musty
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="oxidized" value="1" id="11">
                                            <label class="form-check-label" for="11">
                                                oxidized
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="phenolic" value="1" id="12">
                                            <label class="form-check-label" for="12">
                                                phenolic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="solvent" value="1" id="13">
                                            <label class="form-check-label" for="13">
                                                solvent
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="sour" value="1" id="14">
                                            <label class="form-check-label" for="14">
                                                sour/acidic
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="sulfur" value="1" id="15">
                                            <label class="form-check-label" for="15">
                                                sulfur
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vegetal" value="1" id="16">
                                            <label class="form-check-label" for="16">
                                                vegetal
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="yeasty" value="1" id="17">
                                            <label class="form-check-label" for="17">
                                                yeasty
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="stylistic_accuracy" value="1" id="18">
                                            <label class="form-check-label" for="18">
                                                stylistic_accuracy
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="technical_merit" value="1" id="19">
                                            <label class="form-check-label" for="19">
                                                technical_merit
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="intangibles" value="1" id="20">
                                            <label class="form-check-label" for="20">
                                                intangibles
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="technical_merit" value="1" id="21">
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
                                <label for="inputPassword4">Photo</label>
                                <input type="file" class="form-control" id="exampleFormControlFile1" name="photo">
                                @if(session()->has('photo'))
                                    <span class="h6" style="color: red; font-style:italic;">
                                        <strong>{{ session('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Ajouter"/>
                            <a href="{{ route('degustations.index') }}" type="button" class="btn btn-danger">Retour</a>
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
            //Supprimer les element jadis charger
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
                        if(textBD){
                            var text = document.createTextNode(textBD);
                            num_critere.appendChild(text);
                        critere.appendChild(num_critere);
                        }
                        
                    }
                );
            }
        });
    </script>
    
@endsection