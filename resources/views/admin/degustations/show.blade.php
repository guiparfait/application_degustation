<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Dégustation Crée par <i>{{ $data->user->prenom .' '. $data->user->nom }}</i> le <i>{{ $data->created_at }}</i></h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <img src="{{ asset(''.$data->photo.'') }}" height="200" width="100%" alt="" style="border: 5px solid black">
                        </div>

                        <ul class="list-inline widget-chart m-t-20 text-center">
                            <li>
                                <h4 class=""><b>{{ $data->note_arome }}</b><i style="font-size: 15px"> / 10</i></h4>
                                <p class="text-muted m-b-0">Arôme</p>
                            </li>
                            <li>
                                <h4 class=""><b>{{ $data->note_saveur }}</b><i style="font-size: 15px"> / 10</i></h4>
                                <p class="text-muted m-b-0">Saveur</p>
                            </li>
                            <li>
                                <h4 class=""><b>{{ $data->note_apparence }}</b><i style="font-size: 15px"> / 10</i></h4>
                                <p class="text-muted m-b-0">Apparence</p>
                            </li>
                            <li>
                                <h4 class=""><b>{{ $data->note_sensation }}</b><i style="font-size: 15px"> / 10</i></h4>
                                <p class="text-muted m-b-0">Sensation</p>
                            </li>
                            <li>
                                <h4 class=""><b>{{ $data->note_impression_generale }}</b><i style="font-size: 15px"> / 10</i></h4>
                                <p class="text-muted m-b-0">Impression</p>
                            </li>
                            <li>
                                @php
                                    $som = ($data->note_arome + $data->note_saveur + $data->note_apparence + $data->note_sensation + $data->note_impression_generale);
                                    $moy = $som/5;
                                @endphp
                                <h4 class=""><b>{{ $moy }}</b><i style="font-size: 15px"> / 10</i></h4>
                                <p class="text-muted m-b-0">Moyenne</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6" >
                        <div class="row">
                            <div class="col-md-12">
                                <p>
                                    <span class="h5" style="font-weight:bold;text-decoration:underline">Arome</span><br>
                                    <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                        {{$data->arome}}
                                    <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                                </p>
                                <hr>
                                <p>
                                    <span class="h5" style="font-weight:bold;text-decoration:underline">Saveur</span><br>
                                    <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                        {{$data->saveur}}
                                    <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                                </p>
                                <hr>
                                <p>
                                    <span class="h5" style="font-weight:bold;text-decoration:underline">Apparence</span><br>
                                    <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                        {{$data->apparence}}
                                    <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                                </p>
                                <hr>
                                <p>
                                    <span class="h5" style="font-weight:bold;text-decoration:underline">Sensation</span><br>
                                    <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                        {{$data->sensation}}
                                    <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                                </p>
                                <hr>
                                <p>
                                    <span class="h5" style="font-weight:bold;text-decoration:underline">AVIS</span><br>
                                    <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                        {{$data->impression_generale}}
                                    <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 text-left">
                                <thead>
                                    <th colspan="6">Compositions</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>@if ($data->acetaldehyde == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>acetaldehyde</td>
                                        <td>@if ($data->alcoholic == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>alcoholic</td>
                                        <td>@if ($data->astringent == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>astringent</td>
                                    </tr>
                                    <tr>
                                        <td>@if ($data->dms == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>dms</td>
                                        <td>@if ($data->technical_merit == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>technical_merit</td>
                                        <td>@if ($data->diacetyl == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>diacetyl</td>
                                    </tr>
                                    <tr>
                                        <td>@if ($data->intangibles == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>intangibles</td>
                                        <td>@if ($data->grassy == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>grassy</td>
                                        <td>@if ($data->oxidized == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>oxidized</td>
                                    </tr>
                                    <tr>
                                        <td>@if ($data->musty == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>musty</td>
                                        <td>@if ($data->metallic == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>metallic</td>
                                        <td>@if ($data->estery == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>estery</td>
                                    </tr>
                                    <tr>
                                        <td>@if ($data->stylistic_accuracy == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>stylistic_accuracy</td>
                                        <td>@if ($data->yeasty == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>yeasty</td>
                                        <td>@if ($data->vegetal == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>vegetal</td>
                                    </tr>
                                    <tr>
                                        <td>@if ($data->sulfur == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>sulfur</td>
                                        <td>@if ($data->sour_acidic == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>sour/acidic</td>
                                        <td>@if ($data->solvent == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>solvent</td>
                                    </tr>
                                    <tr>
                                        <td>@if ($data->phenolic == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>phenolic</td>
                                        <td>@if ($data->light_Struck == 1)<i class="ti-check-box text-success"> @else <i class="ti-na text-danger"> @endif</td>
                                        <td>light-Struck</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-header header-title">
                <h4>Commentaires</h4>
            </div>
            <div class="card-body" style="overflow-y: scroll; height:500px">
                @if($data->commentaires->isEmpty())
                    <div class="row">
                        <div class="col-md-2">
                            <div class="text-right">
                                <img src="{{ asset('images/logoAd.png') }}" width="45" height="45" alt="" class="rounded-circle">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card m-t-10">
                                <div class="card-body">
                                    <span class="text-left"  style="font-size: 15px;font-style:italic;">
                                        <b>G.R.A.B</b>
                                    </span><br>
                                    <span>Aucun commentaire pour cette degustation. Soyer le premier à donner votre avis!</span><br>
                                    <span class="text-left"  style="font-size: 10px; font-style:italic; margin-left:50%">
                                        commenté le {{ date('d/m/Y') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                @endif
                @foreach ($data->commentaires as $item)
                    @if ($item->user->id == $user->id)
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card m-t-10">
                                    <div class="card-body ">
                                        <span class="text-right"  style="font-size: 15px;font-style:italic;">
                                            <b>{{ $item->user->prenom.' '. strtoupper($item->user->nom) }}</b>
                                        </span><br>
                                        <span>{{ $item->libelle }}</span><br>
                                        <span class="text-left"  style="font-size: 10px; font-style:italic; margin-left:50%">
                                            commenté le {{ $item->created_at }}
                                        </span>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="text-left">
                                    <img src="{{ asset(''.$item->user->photo.'') }}" width="45" height="45" alt="" class="rounded-circle">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-2">
                                <div class="text-right">
                                    <img src="{{ asset(''.$item->user->photo.'') }}" width="45" height="45" alt="" class="rounded-circle">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card m-t-10">
                                    <div class="card-body">
                                        <span class="text-left"  style="font-size: 15px;font-style:italic;">
                                            <b>{{ $item->user->prenom.' '. strtoupper($item->user->nom) }}</b>
                                        </span><br>
                                        <span>{{ $item->libelle }}</span><br>
                                        <span class="text-left"  style="font-size: 10px; font-style:italic; margin-left:50%">
                                            commenté le {{ $item->created_at }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('commentaires.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="hidden" name="degustation" value="{{ $data->id }}">
                                    <textarea class="form-control @error('libelle') is-invalid @enderror" name="libelle" id="" cols="30" rows="5" placeholder="Exprimez-vous ? vous avez votre mot à dire. Sachez que votre avis compte pour nous."></textarea>
                                    @error('libelle')
                                        <span class="h6" style="color: red; font-style:italic;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-2"><input type="submit" class="btn btn-outline-primary wave-effect wave-light" value="Commenter"></div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <div class="row">
    <div style="height: 500px;overflow-y: scroll;">
        @if($data->commentaires->isEmpty())
        <div class="row">
            <div class="col-md-2">
                <div class="text-rigth">
                    <img src="{{ asset('images/logoAd.png') }}" width="45" height="45" alt="" class="rounded-circle">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card m-t-10">
                    <div class="card-body">
                        <span class="text-left"  style="font-size: 15px;font-style:italic;">
                            <b>G.R.A.B</b>
                        </span><br>
                        <span>Aucun commentaire pour cette degustation. Soyer le premier à donner votre avis!</span><br>
                        <span class="text-left"  style="font-size: 10px; font-style:italic; margin-left:30%">
                            commenté le {{ date('d/m/Y') }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        @endif
        @foreach ($data->commentaires as $item)
            @if ($item->user->id == $user->id)
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card m-t-10">
                            <div class="card-body">
                                <span class="text-left"  style="font-size: 15px;font-style:italic;">
                                    <b>{{ $item->user->prenom.' '. strtoupper($item->user->nom) }}</b>
                                </span><br>
                                <span>{{ $item->libelle }}</span><br>
                                <span class="text-left"  style="font-size: 10px; font-style:italic; margin-left:30%">
                                    commenté le {{ $item->created_at }}
                                </span>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-left">
                            <img src="{{ asset(''.$item->user->photo.'') }}" width="45" height="45" alt="" class="rounded-circle">
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-2">
                        <div class="text-rigth">
                            <img src="{{ asset(''.$item->user->photo.'') }}" width="45" height="45" alt="" class="rounded-circle">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card m-t-10">
                            <div class="card-body">
                                <span class="text-left"  style="font-size: 15px;font-style:italic;">
                                    <b>{{ $item->user->prenom.' '. strtoupper($item->user->nom) }}</b>
                                </span><br>
                                <span>{{ $item->libelle }}</span><br>
                                <span class="text-left"  style="font-size: 10px; font-style:italic; margin-left:30%">
                                    commenté le {{ $item->created_at }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            @endif
        @endforeach
    </div>
</div> --}}
