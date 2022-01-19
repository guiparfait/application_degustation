<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<div class="row">
    <div class="col-xl-3"></div>
    <div class="col-xl-6">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Formulaire de Modification</h4>
                @if ($profil)
                    <form action="{{ route('users.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="@if (old('nom')) {{ old('nom') }} @else {{ $data->nom }} @endif" placeholder="Entrer le Nom">
                            @error('nom')
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénoms</label>
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="@if (old('prenom')) {{ old('prenom') }} @else {{ $data->prenom }} @endif" placeholder="Entrer les Prénoms">
                            @error('prenom')
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            @if(session()->has('photo'))
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ session('photo') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-primary wave-effect wave-light">Modifier</button>
                            <a href="#" class="btn btn-outline-danger wave-effect wave-light">Annuler</a>
                        </div>
                    </form>
                @else
                    <form action="{{ route('profils.update', $data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" required placeholder="Entrer l'adresse email">
                            @error('email')
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="confmail">Confirmer l'Adresse Email</label>
                            <input type="email" class="form-control @error('confmail') is-invalid @enderror @if(session()->has('confmail')) is-invalid @endif" id="confmail" name="confmail" required placeholder="Entrer à nouveau l'Adresse Email">
                            @error('confmail')
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @if(session()->has('confmail'))
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ session('photo') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="m2p">Mot de Passe</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="m2p" name="password" required placeholder="Entrer votre nouveau mot de passe">
                            @error('password')
                                <span class="h6" style="color: red; font-style:italic;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="cm2p">Confirmer le Mot de Passe</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="cm2p" name="password_confirmation" required placeholder="Confirmer votre nouveau mot de passe">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-outline-primary wave-effect wave-light">Modifier</button>
                            <a href="#" class="btn btn-outline-danger wave-effect wave-light">Annuler</a>
                        </div>
                    </form>
                @endif


            </div>
        </div>
    </div>
    <div class="col-xl-3"></div>
</div>

@endsection
