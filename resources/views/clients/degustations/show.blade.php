<!-- appeler le layouts -->
@extends('layouts.clients.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

<div class="banner-2">

</div>
<!-- //banner -->

<!-- about -->
<div class="about py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">détails</h3>
            <p class="title-text font-weight-light font-italic mt-2">Dégustations</p>
        </div>
        <div class="row">
            <div class="col-lg-6 aboutleft">
                @php
                    $moy = ($data->note_arome + $data->note_apparence + $data->note_sensation + $data->note_saveur + $data->note_impression_generale)/5;
                @endphp
                <p class="about-left-agile text-dark text-capitalize font-weight-bold">{{ $data->reference }} | <span class="h6"><i class="h1">{{ $moy }}</i>/10</span></p>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="about-headagile text-capitalize mt-2 mb-2">Catégorie </h3>
                        <p class="my-3 h2">{{ $data->categorie->libelle }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="about-headagile text-capitalize mt-2 mb-2">Arôme |<span class="h6"><i class="h1">{{ $data->note_arome }}</i>/10</span></h3>
                        <p class="my-3">{{ $data->arome }}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="about-headagile text-capitalize mt-2 mb-2">Saveur |<span class="h6"><i class="h1">{{ $data->note_saveur }}</i>/10</span></h3>
                        <p class="my-3">{{ $data->saveur }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="about-headagile text-capitalize mt-2 mb-2">Apparence |<span class="h6"><i class="h1">{{ $data->note_apparence }}</i>/10</span></h3>
                        <p class="my-3">{{ $data->apparence }}</p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="about-headagile text-capitalize mt-2 mb-2">Sensation |<span class="h6"><i class="h1">{{ $data->note_sensation }}</i>/10</span></h3>
                        <p class="my-3">{{ $data->sensation }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="about-headagile text-capitalize mt-2 mb-2">Impression Generale |<span class="h6"><i class="h1">{{ $data->note_impression_generale }}</i>/10</span></h3>
                            <p class="my-3 h2">{{ $data->impression_generale }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 aboutright">
                <div class="large-12 columns">
                    <!-- Owl-Carousel -->
                    <div id="owl-demo" class="owl-carousel owl-theme text-center agileinfo-gallery-row">
                        <a class="item g1">
                            <img class="lazyOwl img-fluid" src="{{ asset(''.$data->photo.'') }}" title=""style="width: 500px; height:300px;" alt="" />
                        </a>
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
                                            <td>@if ($data->acetaldehyde == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>acetaldehyde</td>
                                            <td>@if ($data->alcoholic == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>alcoholic</td>
                                            <td>@if ($data->astringent == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>astringent</td>
                                        </tr>
                                        <tr>
                                            <td>@if ($data->dms == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>dms</td>
                                            <td>@if ($data->technical_merit == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>technical_merit</td>
                                            <td>@if ($data->diacetyl == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>diacetyl</td>
                                        </tr>
                                        <tr>
                                            <td>@if ($data->intangibles == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>intangibles</td>
                                            <td>@if ($data->grassy == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>grassy</td>
                                            <td>@if ($data->oxidized == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>oxidized</td>
                                        </tr>
                                        <tr>
                                            <td>@if ($data->musty == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>musty</td>
                                            <td>@if ($data->metallic == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>metallic</td>
                                            <td>@if ($data->estery == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>estery</td>
                                        </tr>
                                        <tr>
                                            <td>@if ($data->stylistic_accuracy == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>stylistic_accuracy</td>
                                            <td>@if ($data->yeasty == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>yeasty</td>
                                            <td>@if ($data->vegetal == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>vegetal</td>
                                        </tr>
                                        <tr>
                                            <td>@if ($data->sulfur == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>sulfur</td>
                                            <td>@if ($data->sour_acidic == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>sour/acidic</td>
                                            <td>@if ($data->solvent == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>solvent</td>
                                        </tr>
                                        <tr>
                                            <td>@if ($data->phenolic == 1) <img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
                                            <td>phenolic</td>
                                            <td>@if ($data->light_Struck == 1)<img src="{{ asset('clients/images/ok.svg') }}" alt="" height="20" width="20"> @else <img src="{{ asset('clients/images/no.svg') }}" alt="" height="20" width="20"> @endif</td>
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
</div>
<!--//about-->
<div class="slider py-5" id="testi">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">Commentaires</h3>
            <p class="title-text font-weight-light font-italic mt-2">leurs avis sur cette degustations</p>
        </div>
        <div class="flexslider text-center">
            <ul class="slides">
                <li>
                    <div class="client-grids">
                        <img src="{{ asset('images/logo.png')}}" class="img-fluid" height="100" width="100" alt="Responsive image">
                        <h4 class="my-4">C.R.A.B</h4>
                        <p class="paragraph-agileinfo">Ton avis nous verra plaisir inscrir toi, et donne ton avis...</p>
                        <p class="paragraph-agileinfo">{{ date('d/m/Y') }} </p>
                    </div>
                </li>
                @foreach( $data->commentaires as $item)
                    <li>
                        <div class="client-grids">
                            <img src="{{ asset(''.$item->user->photo.'')}}" class="img-fluid" height="100" width="100" alt="Responsive image">
                            <h4 class="my-4">{{ $item->user->prenom.' '.strtoupper($item->user->nom) }}</h4>
                            <p class="paragraph-agileinfo">{{ $item->libelle }}</p>
                            <p class="paragraph-agileinfo">{{ $item->created_at }} </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
