{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!-- appeler le layouts -->
@extends('auth.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

    <h4 class="text-muted text-center font-18"><b>S'inscrire</b></h4>

    <div class="p-3">
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" id="nom" name="nom"  placeholder="Entrer le Nom">
                @error('nom')
                    <span class="h6" style="color: red; font-style:italic;">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="prenom">Prénoms</label>
                <input type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" id="prenom" name="prenom"  placeholder="Entrer les Prénoms">
                @error('prenom')
                <span class="h6" style="color: red; font-style:italic;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email"  placeholder="Entrer l'adresse email">
                @error('email')
                <span class="h6" style="color: red; font-style:italic;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="password">Mot de Passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"  placeholder="Entrer votre nouveau mot de passe">
                @error('password')
                <span class="h6" style="color: red; font-style:italic;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmer le Mot de Passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation"  placeholder="Confirmer votre nouveau mot de passe">
            </div>
            {{-- <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div> --}}

            <div class="form-group row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"  class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label font-weight-normal" for="customCheck1">J'accept <a href="#" class="text-muted">Terms et Conditions</a></label>
                    </div>
                </div>
            </div>

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">S'inscrire</button>
                </div>
            </div>
        </form>
        <div class="form-group text-center row m-t-20">
            <div class="col-12">
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-block waves-effect waves-light" >Retour</a>
            </div>
        </div>
        <div class="form-group m-t-10 mb-0 row">
            <div class="col-12 m-t-20">
                <p>Si vous avez déja un compte <a href="{{ route('login') }}" class="text-muted"><i><b>cliquer ici</b></i></a> pour vous Connecter</p>
            </div>
        </div>
    </div>

@endsection
