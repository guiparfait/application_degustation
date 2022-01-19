<!-- appeler le layouts -->
@extends('auth.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

    <h4 class="text-muted text-center font-18"><b>Se Connecter</b></h4>

    <div class="p-3">
        <form class="form-horizontal m-t-20" action="index.html">


            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Entrer l'adresse email">
            </div>
            <div class="form-group">
                <label for="m2p">Mot de Passe</label>
                <input type="password" class="form-control" id="m2p" name="m2p" required placeholder="Entrer votre nouveau mot de passe">
            </div>

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Se Connecter</button>
                </div>
            </div>
        </form>
        <div class="form-group text-center row m-t-20">
            <div class="col-12">
                <a href="#" class="btn btn-outline-danger btn-block waves-effect waves-light" >Retour</a>
            </div>
        </div>

        <div class="form-group m-t-10 mb-0 row">
            <div class="col-sm-7 m-t-20">
                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Mot de Passe Oublier ?</a>
            </div>
            <div class="col-sm-5 m-t-20">
                <a href="pages-register.html" class="text-muted"><i class="mdi mdi-account-circle"></i> S'inscrire</a>
            </div>
        </div>
    </div>

@endsection
