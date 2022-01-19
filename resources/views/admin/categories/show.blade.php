<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Indentification</h4>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class=" text-center">
                            <img src="{{ asset(''.$data->photo.'') }}" height="200" width="200" alt="" style="border: 5px solid black">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <div class="text-left">
                            <p class="h1">{{ strtoupper($data->libelle) }}<span>
                                <a href="{{ route('categories.edit', $data->id) }}" title="modifier" class="btn btn-outline-warning wave-effect wave-light"><i class="ti-pencil-alt"></i></a></span></p>
                            <p>{{ $nb_degust }} Dégustation(s) Crée(s) Soit {{ $dp }}%</p>
                            <p>
                                <span class="h5" style="font-weight:bold;text-decoration:underline">Arome</span><br>
                                <span style="font-style:italic; colore:#999; padding-left:5%">{{$data->arome}}</span>
                                <hr>
                                <span class="h5" style="font-weight:bold;text-decoration:underline">Saveur</span><br>
                                <span style="font-style:italic; colore:#999; padding-left:5%">{{$data->saveur}}</span>
                                <hr>
                                <span class="h5" style="font-weight:bold;text-decoration:underline">Apparence</span><br>
                                <span style="font-style:italic; colore:#999; padding-left:5%">{{$data->apparence}}</span>
                                <hr>
                                <span class="h5" style="font-weight:bold;text-decoration:underline">Sensation</span><br>
                                <span style="font-style:italic; colore:#999; padding-left:5%">{{$data->sensation}}</span>
                                <hr>
                            </p>
                        </div>
                    </div>

                </div> <!-- end row -->


            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-xl-8">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Dégustation crée avec la catégorie <i>{{ strtoupper($data->libelle) }}</i></h4>

                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-center">
                        <thead>
                            <tr class="titles">
                                <th>#</th>
                                <th>Reference</th>
                                <th>Note</th>
                                <th>Créer Par</th>
                                <th>Date de création</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($nb_degust == 0)
                                <tr>
                                    <td colspan="7">Auncune degustation enregistrée pour le moment.</td>
                                </tr>
                            @else
                                @foreach ($degust as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ strtoupper($item->reference) }}</td>
                                        @php
                                            $som = ($item->note_arome + $item->note_saveur + $item->note_apparence + $item->note_sensation + $item->note_impression_generale);
                                            $moy = $som/5;
                                        @endphp
                                        <td>{{ $moy }}/10</td>
                                        <td>{{ $item->user->prenom.' '.strtoupper($item->user->nom) }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><a href="#" title="Supprimer" class="btn btn-outline-danger wave-effect wave-light"><i class="ti-trash"></i></a></td>
                                        <td><a href="{{ route('degustations.show',$item->id) }}" title="Détails" class="btn btn-outline-success wave-effect wave-light"><i class="ti-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            {{ $degust->links('vendor.pagination.bootstrap-4') }}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Derniere Dégustation</h4>
                @if ($nb_degust == 0)
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Auncune degustation enregistrée pour le moment.</h4>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <img src="{{ asset(''.$lastdeguste->photo.'') }}" height="200" width="100%" alt="" style="border: 5px solid black">
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
                    <div class="row">
                        <div class="col-md-12 text-right" style="font-size: 10px; font-style:italic">
                                 Crée par <i>{{ $lastdeguste->user->prenom .' '. $lastdeguste->user->nom }}</i>
                        </div>
                    </div>

                    <div id="morris-donut-example"></div>
                @endif
            </div>
        </div>
    </div>

</div>

@endsection
