<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

    <div class="row">

        <div class="col-xl-8">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 m-b-15 header-title">Toute les Dégustations</h4>

                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-center">
                            <thead>
                                <tr class="titles">
                                    <th>#</th>
                                    <th>Dégustation</th>
                                    <th>Note</th>
                                    <th>Créer par</th>
                                    <th>Date de création</th>
                                    <th colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($n == 0)
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
                                            <td><a href="{{ route('degustations.show',$item->id) }}" title="Détails" class="btn btn-outline-success wave-effect wave-light"><i class="ti-eye"></i></a></td>
                                            <td><a href="{{ route('degustations.show',$item->id) }}" title="commenter" class="btn btn-outline-info wave-effect wave-light"><i class="ti-comments"></i></a></td>
                                            @if($item->user_id == $user->id)
                                                <td><a href="{{ route('degustations.edit',$item->id) }}" title="modifier" class="btn btn-outline-warning wave-effect wave-light"><i class="ti-pencil"></i></a></td>
                                            @endif
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
            <div class="card card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Derniere Dégustation</h4>
                    @if ($n == 0)
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
                                     le <i>{{ $lastdeguste->created_at }}</i>
                            </div>
                        </div>
                        <div id="morris-donut-example"></div>
                    @endif
                </div>
            </div>
        </div>

    </div>
@endsection

