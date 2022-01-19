<!-- appeler le layouts -->
@extends('auth.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')

    <h4 class="text-muted text-center font-18"><b>Mot de Passe Oublier</b></h4>

    <div class="p-3">
        <form class="form-horizontal m-t-20" action="#">

            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Entrer l'adresse email de votre inscription">
            </div>

            <div class="form-group text-center row m-t-20">
                <div class="col-12">
                    <button class="btn btn-info btn-block waves-effect waves-light" type="submit">Valider</button>
                </div>
            </div>
        </form>
        <div class="form-group text-center row m-t-20">
            <div class="col-12">
                <a href="#" class="btn btn-outline-danger btn-block waves-effect waves-light" >Retour</a>
            </div>
        </div>
    </div>

@endsection
