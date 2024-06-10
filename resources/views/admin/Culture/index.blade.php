@extends('layouts.admin.default')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h3 class="page-title">Les types de produits</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Tous les types de produits</h5>
                    <p>Liste de tous les type de produits ajoutés</p>
                </div>
                <br>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table classes">
                        <thead>
                            <tr>
                                <th width="30%">Libellé</th>
                                <th width="20%">slug</th>
                                <th width="20%">slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type )
                            <tr>
                                <td>
                                    <span class="text">{{$type->libelle}}</span>
                                </td>
                                <td>
                                    <span class="text">{{$type->slug}}</span>
                                </td>

                                <td>{{$type->status == 1 ? "Actif" : "inactif" }}</td>
                                <td>
                                    <form action="{{ route('culture.destroy' , $type->id )}}" method="POST">
                                        @csrf
                                        @method("DELETE")
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
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Ajouter un type de produit</h5>
                    <p>Créez une nouvelle rubrique pour des actualités figurants sur le site</p>
                </div>
                <br>
                <form class="forms-sample" method="POST" action="{{ route('culture.store') }}">
                   @csrf
                    <div class="input-group mb-4">
                        <input type="text" name="libelle" class="form-control" placeholder="Titre de la categorie"
                            aria-label="switch">
                    </div>
                    

                    {{-- <div class="input-group mb-4">
                        <select name="status" class="form-control" id="status">
                            <option value="1">actif</option>
                            <option value="2">Inactif</option>
                        </select>
                    </div> --}}


                    <button type="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button type="reset" class="btn btn-light">Annuler</button>


                    <div class="example">
             

           
						</div>
                        


                </form>
            </div>
        </div>
    </div>

</div>



@endsection
