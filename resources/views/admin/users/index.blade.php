<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="mini-stat clearfix bg-white">
            <span class="mini-stat-icon"><i class="ti-user"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['all'] }}</span> Utilisateurs
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="mini-stat clearfix bg-orange">
            <span class="mini-stat-icon"><i class="ti-crown"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['adm'] }}</span> Administrateurs
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="mini-stat clearfix bg-info">
            <span class="mini-stat-icon"><i class="ti-id-badge"></i></span>
            <div class="mini-stat-info text-right text-light">
                <span class="counter text-white">{{ $tab['mbs'] }}</span> Membres
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Tout les Utilisateurs</h4>
                <div class="row" style="margin-bottom: 10px">
                    <div class="col-md-6">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <input type="text" required class="form-control" name="" placeholder="Recherche">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" title="Recherche" class="btn btn-outline-info wave-effect wave-light"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr class="titles">
                                <th>#</th>
                                <th>Nom</th>
                                <th>Prénoms</th>
                                <th>Roles</th>
                                <th colspan="3">Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @if ($data->isEmpty())
                                <tr>
                                    <td colspan="5">Aucun utilisateur n'est inscrir pour le moment.</td>
                                </tr>
                            @else
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ strtoupper($item['nom']) }}</td>
                                        <td>{{ $item['prenom'] }}</td>
                                        <td>{{ $item['role'] }}</td>
                                        <td><a href="#" title="Supprimer" class="btn btn-outline-danger wave-effect wave-light"><i class="ti-trash"></i></a></td>
                                        <td><a href="{{ route('users.show', $item['id']) }}" title="Détails" class="btn btn-outline-success wave-effect wave-light"><i class="ti-eye"></i></a></td>
                                        <td><a href="{{ route('users.role',$item['id']) }}" class="btn btn-outline-warning wave-effect wave-light" @if ($item['role'] == 'Membre') title="Rendre Admin"><i class="ti-crown">@else title="Rendre Membre"><i class="ti-id-badge">@endif</i></a></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            {{ $data->links('vendor.pagination.bootstrap-4') }}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
