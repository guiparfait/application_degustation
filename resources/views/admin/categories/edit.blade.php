<!-- appeler le layouts -->
@extends('layouts.admin.master')
<!-- ajouter la vue à la bonne position dans le layouts -->
@section('contenu')


<div class="row">

    <div class="col-md-7">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 m-b-15 header-title">Liste</h4>
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="button" class="btn btn-default waves-effect waves-light"><i class="ti-plus"></i> Ajouter</button>
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
                                                <td >{{ $item->libelle }}</td>
                                                <td >{{ $item->arome }}</td>
                                                <td >{{ $item->saveur }}</td>
                                                <td >{{ $item->apparence }}</td>
                                                <td ><a href="{{ route('categories.edit', $item->id)}}" type="button" title="Modifier" class="btn btn-outline-warning waves-effect waves-light"><i class="ti-pencil-alt"></i></a></td>
                                                <td ><button type="button" title="Voir" class="btn btn-outline-default waves-effect waves-light"><i class="ti-eye"></i></button></td>
                                                <td ><button type="button" title="Supprimer" class="btn btn-outline-default waves-effect waves-light"><i class="ti-trash"></i></button></td>
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
    <div class="col-md-5">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 m-b-15 header-title">Formulaire de Modification d'une catégorie</h4>
                <form action="{{ route('categories.update',$datas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="form-group">
                        <label for="libelle">Libellé</label>
                        <input class="form-control @error('libelle') is-invalid @enderror" name="libelle" value="@if (old('libelle')) {{ old('libelle') }} @else {{ $datas->libelle }} @endif" id="libelle"/>
                        @error('libelle')
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="arome">Arome</label>
                        <textarea class="form-control @error('arome') is-invalid @enderror" name="arome" id="arome" cols="10" rows="3">@if(old('arome')){{ old('arome') }}@else{{ $datas->arome }} @endif</textarea>
                        @error('arome')
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="saveur">Saveur</label>
                        <textarea class="form-control @error('saveur') is-invalid @enderror" name="saveur" id="saveur" cols="10" rows="3">@if(old('saveur')){{ old('saveur') }}@else{{ $datas->saveur }} @endif</textarea>
                        @error('saveur')
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="apparence">Apparence</label>
                        <textarea class="form-control @error('apparence') is-invalid @enderror" name="apparence" id="apparence" cols="10" rows="3">@if(old('apparence')){{ old('apparence') }}@else{{ $datas->apparence }} @endif</textarea>
                        @error('apparence')
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sensation">Sensation</label>
                        <textarea class="form-control @error('sensation') is-invalid @enderror" name="sensation" id="sensation" cols="10" rows="3">@if(old('sensation')){{ old('sensation') }}@else{{ $datas->sensation }}@endif</textarea>
                        @error('sensation')
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control @if(session()->has('photo')) is-invalid @endif" id="photo" name="photo">
                        @if(session()->has('photo'))
                            <span class="h6" style="color: red; font-style:italic;">
                                <strong>{{ session('photo') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-primary wave-effect wave-light">Modifier</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-outline-danger wave-effect wave-light">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
@endsection
