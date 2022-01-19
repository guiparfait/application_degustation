<!-- appeler le layouts -->
@extends('layouts.clients.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<!-- about -->
<div class="pogoSlider" id="js-main-slider">
    <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b4.jpg);">
        <div class="pogoSlider-slide-element">
            <div class="container">
                <div class="banner-img-agile">
                    <img src="images/bannerimg.png" alt="" class="img-fluid">
                </div>
                <h3 class="text-white">Qui sommes nous </h3>
                <p class="font-italic text-uppercase">Une entreprise de dégustations de bière!</p>
                <a class="bubbly-button" href="menu.html"> En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b1.jpg);">
        <div class="pogoSlider-slide-element">
            <div class="container">
                <div class="banner-img-agile">
                    <img src="images/bannerimg.png" alt="" class="img-fluid">
                </div>
                <h3 class="text-white">La bonne bière </h3>
                <p class="font-italic text-uppercase">Bienvenue chez nous!</p>
            </div>
        </div>
    </div>
    <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b2.jpg);">
        <div class="pogoSlider-slide-element">
            <div class="container">
                <div class="banner-img-agile">
                    <img src="images/bannerimg.png" alt="" class="img-fluid">
                </div>
                <h3 class="text-white">Nos catégories</h3>
                <p class="font-italic text-uppercase">Nous avons plusieurs styles de bière!</p>
                <a class="bubbly-button" href="menu.html">En savoir plus</a>
            </div>
        </div>
    </div>
    <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000" style="background-image:url(images/b3.jpg);">
        <div class="pogoSlider-slide-element">
            <div class="container">
                <div class="banner-img-agile">
                    <img src="images/bannerimg.png" alt="" class="img-fluid">
                </div>
                <h3 class="text-white"> Nos dégustations</h3>
                <p class="font-italic text-uppercase">Je ne subis par la pression mais je la boire!</p>
                <a class="bubbly-button" href="menu.html">En savoir plus</a>
            </div>
        </div>
    </div>
</div>






<div class="about py-5" id="apropos">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">Bienvenue sur notre site</h3>
            <p class="title-text font-weight-light font-italic mt-2">Faites comme chez vous</p>
        </div>
        <div class="row">
            <div class="col-lg-6 aboutleft">
                <p class="about-left-agile text-dark text-capitalize font-weight-bold">Qui Sommes Nous</p>
                <p class="my-3">Le CRAB, pour Collectif Rennais des Amateurs de Bières, est une association rassemblant des habitants de Rennes et alentour ayant une passion pour la bonne bière et sa fabrication.
                    Très actif, le CRAB propose régulièrement à ses membres de participer à divers types d’activités :
                </p>
                <p>
                    <ul class="my-3" style="margin-left: 10%; color: #999">
                        <li>Une rencontre mensuelle dans un bar rennais</li>
                        <li>Organisation d’un concours de brassage amateur</li>
                        <li>Entraide technique</li>
                        <li>Ateliers DIY</li>
                        <li>etc.</li>
                    </ul>
                </p>
                <p> Si vous habitez Rennes ou ses alentours et que ces activités vous parle, alors n’hésitez pas, rejoignez-nous !</p>
            </div>
            <div class="col-lg-6 aboutleft">
                <p class="my-3 text-center">
                    <img src="{{ asset('images/b3.jpg') }}" height="400" width="400 "  alt="">
                </p>
            </div>
        </div>
        <div class="row" style="margin-top:15px;">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <a class="bubbly-button" target="__blank" href="https://www.helloasso.com/associations/collectif-rennais-des-amateurs-de-bieres-crab/adhesions/adhesion-au-crab-2021 " class="btn btn-primary">En savoir plus</a>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>
</div>
<!--//about-->

<!-- about bottom -->
<div class="video-w3l text-center py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="text-white">Le rire est à l'homme ce que la bière est à la pression.</h3>
        <p class="font-italic p-3">Boire c'est rendre les autres plus intéressant. </p>

    </div>
</div>
<!-- //about bottom -->

<!-- work -->
<section class="services py-5" id="work">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">Nos catégories</h3>
            <p class="title-text font-weight-light font-italic mt-2">Nous avons plusieurs styles de bières</p>
        </div>

        <div class="row">
            <div class="row">
                @foreach( $categories as $item)
                    <div class="col-lg-6">
                        <a href="{{ route('home.categories.show',$item->id) }}">
                            <div class="d-flex box-a py-5 px-3" style="margin-bottom:25px;">
                                <div class="col-3">
                                    <i class="fas fa-glass-martini"></i>
                                </div>
                                <div class="col-9" style="width: 500px; text-align: right;">
                                    <h3>{{ substr($item->libelle,0,15) }}...</h3>
                                    <p class="mt-3">
                                        <span>Arome : {{ substr($item->arome,0,30) }}...</span><br>
                                        <span>Saveur : {{ substr($item->saveur,0,30) }}...</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <!-- .Box ends here -->
                    </div>
                @endforeach
                <!-- .Col-lg-6 ends here -->
            </div>
        </div>


        <div class="row" style="margin-top:15px;">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <a class="bubbly-button" href="{{ route('home.categories') }}" class="btn btn-primary">Plus de catégories</a>
            </div>
            <div class="col-md-4"></div>
        </div>

        <!-- .Row ends here -->
    </div>
    <!-- .Container ends here -->
</section>
<!-- .Section ends here -->
<!-- //work -->

<!-- news -->
<div class="middle-section py-5" id="news">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">Nos dégustations</h3>
            <p class="title-text font-weight-light font-italic mt-2">Listes de quelques dégustations</p>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="wthree_events_grid">
                @foreach( $degustations as $item)
                    <div class="event-grids">
                        <div class="agileits_event_grid_date">
                            <p class="text-white text-uppercase">Publier le </p>
                            <span>{{ $item->created_at }}</span>
                        </div>
                        <div class="agileinfo_events_grid1">
                            <div class="events_info_w3ls">
                                <a href="{{ route('home.degustations.show',$item->id) }}">{{ $item->reference }}</a>
                                <p>{{ $item->impression_generale }}</p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div class="row" style="margin-top:15px;">
            <div class="col-md-12 text-center">

                <a class="bubbly-button" href="{{ route('home.degustations') }}" class="btn btn-primary">Plus de degustations</a>
            </div>
        </div>
    </div>
</div>


<!-- stats -->
<section class="stats_test py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="d-flex inner_stat_wthree_agileits text-center">
            <div class="col-sm-4 py-5 stats_left counter_grid">
                <i class="far fa-building"></i>
                <p class="counter">{{ $cd }}</p>
                <h4>Degustations</h4>
            </div>
            <div class="col-sm-4 py-5 stats_left counter_grid2 border-left border-right">
                <i class="far fa-edit"></i>
                <p class="counter">{{ $cc }}</p>
                <h4>Commentaires</h4>
            </div>
            <div class="col-sm-4 py-5 stats_left counter_grid1">
                <i class="fas fa-users"></i>
                <p class="counter">{{ $cm}}</p>
                <h4>Membres</h4>
            </div>
        </div>
    </div>
</section>

	<!-- testimonials -->
<div class="slider py-5" id="testi">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">Commentaires</h3>
            <p class="title-text font-weight-light font-italic mt-2">leurs avis</p>
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
                @foreach( $commentaire as $item)
                    <li>
                        <div class="client-grids">
                            <img src="{{ asset(''.$item->photo.'')}}" class="img-fluid" height="100" width="100" alt="Responsive image">
                            <h4 class="my-4">{{ $item->prenom.' '.strtoupper($item->nom) }}</h4>
                            <p class="paragraph-agileinfo">{{ $item->libelle }}</p>
                            <p class="paragraph-agileinfo">{{ $item->created_at }} </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
	<!-- //testimonials -->


<!-- //stats -->
@endsection
