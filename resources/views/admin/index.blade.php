<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon"><i class="ti-world"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['td'] }}</span> Toutes Dégust.
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-orange">
            <span class="mini-stat-icon"><i class="ti-pie-chart"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['md'] }}</span> Mes Dégust.
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-info">
            <span class="mini-stat-icon"><i class="ti-comments"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['cm'] }}</span> Commentaires
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="mini-stat clearfix bg-danger">
            <span class="mini-stat-icon"><i class="ti-user"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['mb'] }}</span> Membres
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Dernière Dégustation @if ($tab['te'] != 0)Crée par <i> {{ $lastdeguste->user->prenom .' '. $lastdeguste->user->nom }}</i> le <i>{{ $lastdeguste->created_at }}</i></h4> @endif
                @if ($tab['te'] != 0)
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="{{ route('degustations.show',$lastdeguste->id) }}" class="btn btn-primary waves-effect waves-light"><i class="ti-plus"></i> Commenter</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row" style="margin: 0 auto; width: 350px; ">
                                <a href="{{ route('degustations.show',$lastdeguste->id)}}">
                                    <img src="{{ asset(''.$lastdeguste->photo.'') }}" height="200" width="100%" alt="" style="border: 5px solid black">
                                </a>
                            </div>

                            <ul class="list-inline widget-chart m-t-20 text-center">
                                <li>
                                    <h4 class=""><b>{{ $lastdeguste->note_arome }}</b><i style="font-size: 15px"> / 10</i></h4>
                                    <p class="text-muted m-b-0">Arôme</p>
                                </li>
                                <li>
                                    <h4 class=""><b>{{ $lastdeguste->note_saveur }}</b><i style="font-size: 15px"> / 10</i></h4>
                                    <p class="text-muted m-b-0">Saveur</p>
                                </li>
                                <li>
                                    <h4 class=""><b>{{ $lastdeguste->note_apparence }}</b><i style="font-size: 15px"> / 10</i></h4>
                                    <p class="text-muted m-b-0">Apparence</p>
                                </li>
                                <li>
                                    <h4 class=""><b>{{ $lastdeguste->note_sensation }}</b><i style="font-size: 15px"> / 10</i></h4>
                                    <p class="text-muted m-b-0">Sensation</p>
                                </li>
                                <li>
                                    <h4 class=""><b>{{ $lastdeguste->note_impression_generale }}</b><i style="font-size: 15px"> / 10</i></h4>
                                    <p class="text-muted m-b-0">Impression</p>
                                </li>
                                <li>
                                    @php
                                        $som = ($lastdeguste->note_arome + $lastdeguste->note_saveur + $lastdeguste->note_apparence + $lastdeguste->note_sensation + $lastdeguste->note_impression_generale);
                                        $moy = $som/5;
                                    @endphp
                                    <h4 class=""><b>{{ $moy }}</b><i style="font-size: 15px"> / 10</i></h4>
                                    <p class="text-muted m-b-0">Moyenne</p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <span class="h5" style="font-weight:bold;text-decoration:underline">AVIS</span><br>
                                        <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                            {{$lastdeguste->impression_generale}}
                                        <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" >
                            <div style="height: 500px;overflow-y: scroll;">
                                @if($lastdeguste->commentaires->isEmpty())
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
                                @foreach ($lastdeguste->commentaires as $item)
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
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3>Aucne Dégustation créer pour le moment</h3>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>



@endsection
