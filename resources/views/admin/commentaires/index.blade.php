<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<div class="row">

    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Liste</h4>
                <div class="row" style="margin-top:5px;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr class="titles">
                                    <th>#</th>
                                    <th>Reference</th>
                                    <th>Commentaire</th>
                                    <th>Auteur</th>
                                    <th>Commenter le </th>
                                    <th colspan=2>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @if($data->isEmpty())
                                    <tr>
                                        <th colspan="6">Aucn commentaire enregistré pour le moment.</th>
                                    </tr>
                                @else
                                    @foreach ($data as $item)
                                        <tr>
                                            <td >{{ $item->id }}</td>
                                            <td>{{ $item->reference }}</td>
                                            <td >{{ substr($item->libelle,0,100) }}...</td>
                                            <td>{{ $item->user->prenom.' '.$item->user->nom }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td ><a href="{{ route('degustations.show',$item->degustation->id) }}" type="button" title="Voir" class="btn btn-outline-success waves-effect waves-light"><i class="ti-eye"></i></a></td>
                                            <td >
                                                <form method="post" action="{{ route('commentaires.destroy', $item->id) }}"
                                                onsubmit="return confirm('Être vous sûre de vouloir Supprimer cet commentaire ?') ">
                                                  {{ csrf_field() }}{{ method_field('DELETE') }}
                                                  <button type="submit" class="btn btn-outline-danger waves-effect waves-light" title="Supprimer"><i class="ti-trash"></i></button>
                                                </form>
                                            </td>
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

</div>
@endsection

