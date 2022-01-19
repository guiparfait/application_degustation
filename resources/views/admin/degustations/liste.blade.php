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
                                    <th>Categorie</th>
                                    <th>Arome</th>
                                    <th>Saveur</th>
                                    <th>Apparence</th>
                                    <th>Avis</th>
                                    <th>Note</th>
                                    <th colspan=2>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @if($data->isEmpty())
                                    <tr>
                                        <th colspan="10">Aucne dégustation enregistrée pour le moment.</th>
                                    </tr>
                                @else
                                    @foreach ($data as $item)
                                        <tr>
                                            <td >{{ $item->id }}</td>
                                            <td>{{ $item->reference }}</td>
                                            <td >{{ substr($item->categorie->libelle,0,100) }}</td>
                                            <td >{{ substr($item->arome,0,100) }}</td>
                                            <td >{{ substr($item->saveur,0,100) }}</td>
                                            <td >{{ substr($item->apparence,0,100) }}</td>
                                            <td >{{ substr($item->impression_generale,0,100) }}...</td>
                                            @php
                                                $som = ($item->note_arome + $item->note_saveur + $item->note_apparence + $item->note_sensation + $item->note_impression_generale);
                                                $moy = $som/5;
                                            @endphp
                                            <td>{{ $moy }}/10</td>
                                            <td ><a href="{{ route('degustations.show',$item->id) }}" type="button" title="Voir" class="btn btn-outline-success waves-effect waves-light"><i class="ti-eye"></i></a></td>
                                            <td >
                                                <form method="post" action="{{ route('degustations.destroy', $item->id) }}"
                                                onsubmit="return confirm('Être vous sûre de vouloir Supprimer cette degustation ? si oui tout les commentaires liés seront supprimés!') ">
                                                  {{ csrf_field() }}{{ method_field('DELETE') }}
                                                  <input type="hidden" name="sens" value="zonechef">
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

