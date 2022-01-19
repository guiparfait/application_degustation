<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<div class="row">

    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Liste</h4>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary waves-effect waves-light"><i class="ti-plus"></i> Ajouter</a>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr class="titles">
                                    <th>#</th>
                                    <th>Intitulé</th>
                                    <th>Arome</th>
                                    <th>Saveur</th>
                                    <th>Apparence</th>
                                    <th>Sensation</th>
                                    <th colspan=3>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @if($data->isEmpty())
                                    <tr>
                                        <th colspan=9>Aucne Catégorie enregistrée pour le moment.</th>
                                    </tr>
                                @else
                                    @foreach ($data as $item)
                                        <tr>
                                            <td >{{ $item->id }}</td>
                                            <td >{{ substr($item->libelle,0,100) }}</td>
                                            <td >{{ substr($item->arome,0,100) }}</td>
                                            <td >{{ substr($item->saveur,0,100) }}</td>
                                            <td >{{ substr($item->apparence,0,100) }}</td>
                                            <td >{{ substr($item->sensation,0,100) }}</td>
                                            <td ><a href="{{ route('categories.edit',$item->id) }}" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a></td>
                                            <td ><a href="{{ route('categories.show',$item->id) }}" type="button" title="Voir" class="btn btn-outline-success waves-effect waves-light"><i class="ti-eye"></i></a></td>
                                            <td >
                                                <form method="post" action="{{ route('categories.destroy', $item->id) }}"
                                                onsubmit="return confirm('Être vous sûre de vouloir Supprimer cette catégorie ? si oui toute les dégustations et les commentaires liés seront supprimés!') ">
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
