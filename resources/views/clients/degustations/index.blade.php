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
            <h3 class="title text-capitalize text-dark">Nos Dégustations</h3>
            <p class="title-text font-weight-light font-italic mt-2">Différentes dégustations effectuées par nos membres</p>
        </div>
        <div class="inner-sec pt-md-4">
            <div class="row proj_gallery_grid">
                @foreach ($data as $item)
                    <div class="col-sm-4 section_1_gallery_grid" style="margin-bottom:25px;">
                        <a href="{{ route('home.degustations.show',$item->id) }}">
                            <div class="section_1_gallery_grid1">
                                <img src="{{ asset(''.$item->photo.'') }}" style="width: 500px; height:250px" alt=" " class="img-fluid" />
                                <div class="proj_gallery_grid1_pos">
                                    <h3>{{ $item->reference }}</h3>
                                    <p>{{ substr($item->impression_generale,0,70) }}...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $data->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>
</section>

<!--//gallery-->

@endsection
