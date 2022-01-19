{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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

    <h4 class="text-muted text-center font-18"><b>Se Connecter</b></h4>

    <div class="p-3">
        <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Entrer l'adresse email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="m2p">Mot de Passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="m2p" name="password" placeholder="Entrer votre nouveau mot de passe">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Se Connecter</button>
                </div>
            </div>
        </form>
        <div class="form-group text-center row m-t-20">
            <div class="col-12">
                <a href="{{ route('home') }}" class="btn btn-outline-danger btn-block waves-effect waves-light" >Retour</a>
            </div>
        </div>

        <div class="form-group m-t-10 mb-0 row">
            <div class="col-sm-7 m-t-20">
                <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Mot de Passe Oublier ?</a>
            </div>
            <div class="col-sm-5 m-t-20">
                <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> S'inscrire</a>
            </div>
        </div>
    </div>

@endsection
