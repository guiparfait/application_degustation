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
				<p class="title-text font-weight-light font-italic mt-2">Le rôle de chaque développeur </p>
			</div>
			<div class="row">
				<div class="col-lg-6 aboutleft">
					<p class="about-left-agile text-dark text-capitalize font-weight-bold">{{ $data['civil'].' '.$data['prenom'].' '.$data['nom'] }}</p>
					<h3 class="about-headagile text-capitalize mt-2 mb-4">{{ $data['post'] }}</h3>
					<p class="my-3">{{ $data['avis'] }}</p>
                    <h2 class="about-headagile text-capitalize mt-2 mb-4">Coordonnées</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('clients/images/mail.gif') }}" style="width: 48px; height: 48px;" alt=""></td>
                                <td>{{ $data['email'] }}</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('clients/images/phone.gif') }}" style="height: 48px; width: 48px;" alt=""></td>
                                <td>{{ $data['tel'] }}</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('clients/images/home.svg') }}" alt=""></td>
                                <td>{{ $data['loger'] }}</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('clients/images/diplome.png') }}" alt=""></td>
                                <td>{{ $data['niveau'] }}</td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('clients/images/univ.png') }}" alt=""></td>
                                <td>{{ $data['ecole'] }}</td>
                            </tr>
                        </tbody>
                    </table>

				</div>
				<div class="col-lg-6 aboutright">
					<div class="large-12 columns">
						<!-- Owl-Carousel -->
						<div id="owl-demo" class="owl-carousel owl-theme text-center agileinfo-gallery-row">
							<a class="item g1">
								<img class="lazyOwl img-fluid" src="{{ asset(''.$data['photo'].'') }}" title="" alt="" />
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->


@endsection
