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
                        <div class="text-center">
                            <p class="h1">{{ $data->prenom.' '. strtoupper($data->nom) }}<span>
                                <a href="{{ route('users.edit', $data->id) }}" title="modifier" class="btn btn-outline-warning wave-effect wave-light"><i class="ti-pencil-alt"></i></a></span></p>
                            <p><i>{{ $data->role }}</i></p>
                            <p>{{ $stats['nb_degust'] }} Dégustation(s) Crée(s) Soit {{ $stats['dp'] }}%</p>
                            <p>{{ $stats['nb_com'] }} Commentaire(s effectué(s) Soit {{ $stats['cp'] }}%</p>
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
                <h4 class="mt-0 m-b-15 header-title">Dégustation crée par <i>{{ $data->prenom.' '. strtoupper($data->nom) }}</i></h4>

                <div class="table-responsive">
                    <table class="table table-hover mb-0 text-center">
                        <thead>
                            <tr class="titles">
                                <th>#</th>
                                <th>Reference</th>
                                <th>Note</th>
                                <th>Commentaires</th>
                                <th>Date de création</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($stats['dp']==0)
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
                                        <td>{{ $moy }}</td>
                                        <td>{{ $item->commentaires->count() }}</td>
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
                @if ($stats['dp']==0)
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
                            <p class="text-muted m-b-0">Impression générale</p>
                        </li>
                        <li>
                            @php
                                $som = ($lastdeguste->note_arome + $lastdeguste->note_saveur + $lastdeguste->note_apparence + $lastdeguste->note_sensation + $lastdeguste->note_impression_generale);
                                $moy = $som/5;
                            @endphp
                            <h4 class=""><b>{{ $moy }}</b><i style="font-size: 15px"> / 10</i></h4>
                            <p class="text-muted m-b-0">Moyenne Totale</p>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>

</div>

<div class="row">


    <div class="col-xl-4">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Dernier Commentaire</h4>
                @if ($stats['cp']==0)
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>Auncun commentaire enregistré pour le moment.</h4>
                        </div>
                    </div>
                @else
                <div class="row">
                    <img src="{{ asset(''.$lastcom->degustation->photo.'') }}" height="200" width="100%" alt="" style="border: 5px solid black">
                </div>
                <ul class="list-inline widget-chart m-t-20 text-center">
                    <li>
                        <h4 class="" style="font-size: 15px">{{ $lastcom->degustation->reference }}<b></b></h4>
                        <p class="text-muted m-b-0">Degustation N°</p>
                    </li>
                    <li>
                        <h4 class="" style="font-size: 15px"><b>{{ $lastcom->degustation->user->prenom.' '.strtoupper($lastcom->degustation->user->nom) }}</b><i style="font-size: 15px"></i></h4>
                        <p class="text-muted m-b-0">Publier Par</p>
                    </li>
                    <li>
                        @php
                            $som = ($lastcom->degustation->note_arome + $lastcom->degustation->note_saveur + $lastcom->degustation->note_apparence + $lastcom->degustation->note_sensation + $lastcom->degustation->note_impression_generale);
                            $moy = $som/5;
                        @endphp
                        <h4 class=""><b>{{ $moy }}</b><i style="font-size: 15px"> / 10</i></h4>
                        <p class="text-muted m-b-0">Moyenne Totale</p>
                    </li>

                </ul>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <b><i class="ti-quote-left" style="font-size: 25px; font-weight: bold;"></i></b>
                                {{$lastcom->libelle}}
                            <b><i class="ti-quote-right" style="font-weight: bold; font-size: 25px;"></i></b>
                        </p>
                        <p class="text-right"><i>{{ $lastcom->created_at }}</i></p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Commentaires effectués par <i>{{ $data->prenom.' '. strtoupper($data->nom) }}</i></h4>

                <div class="table-responsive text-center">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="titles">
                                <th>#</th>
                                <th>Dégustation</th>
                                <th>Commentaires</th>
                                <th>Commenté le</th>
                                <th colspan="2">Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @if ($stats['cp']==0)
                                <tr>
                                    <td colspan="6">Auncun commentaire enregistré pour le moment.</td>
                                </tr>
                            @else
                                @foreach ($comment as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ strtoupper($item->degustation->reference) }}</td>
                                        <td>{{ substr(''.$item->libelle .'', 0, 10) }}...</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td><a href="#" title="Supprimer" class="btn btn-outline-danger wave-effect wave-light"><i class="ti-trash"></i></a></td>
                                        <td><a href="#" title="Détails" class="btn btn-outline-success wave-effect wave-light"><i class="ti-eye"></i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Identifiant de Connexion de <i>{{ $data->prenom.' '. strtoupper($data->nom) }}</i></h4>

                <div class="table-responsive text-center">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="titles">
                                <th>{{ $data->email }}</th>
                                <th>**********</th>
                                <th><button type="button" title="Supprimer" class="btn btn-outline-danger wave-effect wave-light"><i class="ti-trash"></i></button>
                                    <a href="{{ route('profils.edit', $data->id) }}" title="modifier" class="btn btn-outline-warning wave-effect wave-light"><i class="ti-pencil-alt"></i></a></th>
                            </tr>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
