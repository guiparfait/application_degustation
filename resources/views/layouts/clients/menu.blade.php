
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<h1>
				<a class="navbar-brand" href="{{ route('home') }}">
					<img src=" {{ asset('images/logo.png') }} " alt=" " class="img-fluid">
				</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item @if ($act == 'home') active @endif">
						<a class="nav-link" href="{{ route('home') }}">Accueil
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mx-lg-3 @if ($act == 'cat') active @endif">
						<a class="nav-link" href="{{ route('home.categories') }}">Catégories</a>
					</li>
					<li class="nav-item mx-lg-3 @if ($act == 'deg') active @endif">
						<a class="nav-link" href="{{ route('home.degustations') }}">Dégustations</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="#apropos">A propos de nous</a>
                        {{-- <a target="__blank" href="https://www.helloasso.com/associations/collectif-rennais-des-amateurs-de-bieres-crab/adhesions/adhesion-au-crab-2021">A propos de nous</a> --}}

					</li>
					<li class="nav-item mx-lg-3 @if ($act == 'dev') active @endif">
						<a class="nav-link" href="{{ route('home.devs') }}">Développeurs</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="{{ route('register') }}">S'inscrire</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('login') }}">Se Connecter</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
