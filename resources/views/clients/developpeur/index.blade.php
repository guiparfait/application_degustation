<!-- appeler le layouts -->
@extends('layouts.clients.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

<div class="banner-2">

</div>
<!-- //banner -->

<!-- gallery -->
<section class="gallery py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="title-heading text-center mb-sm-5 mb-4">
            <h3 class="title text-capitalize text-dark">Les développeurs</h3>
            <p class="title-text font-weight-light font-italic mt-2">Les différents développeurs de ce projet</p>
        </div>
        <div class="inner-sec pt-md-4">
            <div class="row proj_gallery_grid">
                @foreach ($tab as $item)
                    <div class="col-sm-4 section_1_gallery_grid" style="margin-bottom: 10px;">
                        <a href="{{ route('home.devs.show',$item['id']) }}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{ asset(''.$item['photo'].'') }}" width="640" height="426" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>{{  $item['prenom'].' '.$item['nom'] }} </h3>
                                    <p>{{ $item['post'] }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--//gallery-->

@endsection
