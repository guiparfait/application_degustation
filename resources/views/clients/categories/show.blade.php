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
				<h3 class="title text-capitalize text-dark">détails  </h3>
				<p class="title-text font-weight-light font-italic mt-2">Catégorie </p>
			</div>
			<div class="row">
				<div class="col-lg-6 aboutleft">
					<p class="about-left-agile text-dark text-capitalize font-weight-bold">{{ $data->libelle }}</p>
					<h3 class="about-headagile text-capitalize mt-2 mb-4">Arôme </h3>
					<p class="my-3">{{ $data->arome }} </p>

                    <h3 class="about-headagile text-capitalize mt-2 mb-4">Saveur </h3>
					<p class="my-3"> {{ $data->saveur }} </p>

                    <h3 class="about-headagile text-capitalize mt-2 mb-4">Apparence </h3>
					<p class="my-3"> {{ $data->apparence }} </p>

                    <h3 class="about-headagile text-capitalize mt-2 mb-4">Sensation </h3>
					<p class="my-3"> {{ $data->sensation }}</p>

				</div>
				<div class="col-lg-6 aboutright">
					<div class="large-12 columns">
						<!-- Owl-Carousel -->
						<div id="owl-demo" class="owl-carousel owl-theme text-center agileinfo-gallery-row">
							<a class="item g1">
								<img class="lazyOwl img-fluid" src="{{ asset(''.$data->photo.'') }}" title="{{ $data->libelle }}" alt="" />
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->


@endsection
