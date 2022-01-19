<!-- appeler le layouts -->
@extends('auth.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

    <h4 class="text-muted text-center font-18"><b>S'inscrire</b></h4>

    <div class="p-3">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required placeholder="Entrer le Nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénoms</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required placeholder="Entrer les Prénoms">
            </div>
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Entrer l'adresse email">
            </div>
            <div class="form-group">
                <label for="mail">Confirmer l'Adresse Email</label>
                <input type="email" class="form-control" id="mail" name="mail" required placeholder="Entrer à nouveau l'Adresse Email">
            </div>
            <div class="form-group">
                <label for="m2p">Mot de Passe</label>
                <input type="password" class="form-control" id="m2p" name="m2p" required placeholder="Entrer votre nouveau mot de passe">
            </div>
            <div class="form-group">
                <label for="cm2p">Confirmer le Mot de Passe</label>
                <input type="password" class="form-control" id="cm2p" name="cm2p" required placeholder="Confirmer votre nouveau mot de passe">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" required class="custom-control-input" id="customCheck1">
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
                <a href="#" class="btn btn-outline-danger btn-block waves-effect waves-light" >Retour</a>
            </div>
        </div>
        <div class="form-group m-t-10 mb-0 row">
            <div class="col-12 m-t-20">
                <p>Si vous avez déja un compte <a href="#" class="text-muted"><i><b>cliquer ici</b></i></a> pour vous Connecter</p>
            </div>
        </div>
    </div>

@endsection
