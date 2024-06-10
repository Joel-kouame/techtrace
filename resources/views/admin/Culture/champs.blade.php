@extends('layouts.admin.default')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h3 class="page-title">Les produits</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Tous les produits</h5>
                    <p>Liste de tous les produits ajoutés</p>
                </div>
                <br>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table classes">
                        <thead>
                            <tr>
                                <th width="30%">Libellé</th>
                                <th width="20%">Tonnage Ant</th>
                                <th width="20%">Superficie</th>
                                {{-- <th width="20%">slug</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($champs as $champ )
                            <tr>
                                <td>
                                    <span class="text">{{$champ->typeculture->libelle}}</span>
                                </td>
                                <td>
                                    <span class="text">{{$champ->tonnage_ant}}</span>
                                </td>
                                <td>
                                    <span class="text">{{$champ->superficie}}</span>
                                </td>

                                {{-- <td>{{$champ->status == 1 ? "Actif" : "inactif" }}</td> --}}
                                <td>
                                    <form action="{{ route('culture.destroy' , $champ )}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                      <a href="{{ route('champ.show' , $champ)}}"
                                            class="btn btn-primary btn-xs">  <i class="link-icon" data-feather="eye"></i></i></a>
                                        <button class="btn btn-danger btn-xs delete"><i
                                                class="mdi mdi-delete"></i>delete</button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Ajouter un produit</h5>
                    <p>Créez une nouvelle rubrique pour des prodits figurants sur le site</p>
                </div>
                <br>
                <form class="forms-sample" method="POST" action="{{ route('champ.store') }}">
                   @csrf
                  <div class="row">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="col-6">
                        <div class="input-group mb-4">
                            <input type="number" name="tonnage_ant" class="form-control" placeholder="Tonnage"
                                aria-label="switch">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-4">
                            
                            <input type="number" name="superficie" class="form-control" placeholder="Superficie"
                                aria-label="switch">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">Type de produits :</label><br>
                        <div class="input-group mb-4">
                           <select class="form-control" name="type_culture_id" id="">
                            <option value=""> -- select -- </option>
                               @foreach($types as $type)
                                <option value="{{ $type->id}}">{{$type->libelle}}</option>
                               @endforeach
                           </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">Description :</label><br>
                        <div class="input-group mb-4">
                            <textarea  name="description"  class="form-control" cols="3" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="">Localité :</label><br>
                        <div class="input-group mb-4">
                            <input type="text" name="origine_geo" class="form-control" placeholder="origine"
                                aria-label="switch">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="">Date de production :</label><br>
                        <div class="input-group mb-4">
                            <input type="date" name="date_production" class="form-control" placeholder="Date production"
                                aria-label="switch">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="">Date récolte :</label><br>
                        <div class="input-group mb-4">
                            <input type="date" name="date_recolte" class="form-control" placeholder="Date récolte"
                                aria-label="switch">
                        </div>
                    </div>

                  </div>
                    

                    {{-- <div class="input-group mb-4">
                        <select name="status" class="form-control" id="status">
                            <option value="1">actif</option>
                            <option value="2">Inactif</option>
                        </select>
                    </div> --}}


                    <button champ="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button champ="reset" class="btn btn-light">Annuler</button>
                </form>
            </div>
        </div>
    </div>

</div>



@endsection
