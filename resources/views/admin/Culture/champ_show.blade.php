@extends('layouts.admin.default')
@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h3 class="page-title">Les rôles</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="head">
                    <h5 class="mb-2">Produits</h5>

                </div>
                <br>
                <form action="">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <input type="text" class="form-control" disabled name="" id=""
                                value="{{ $champ->typeculture->libelle}}">
                        </div>

                        <div class="col-6  mb-4">
                            <input type="text" class="form-control" disabled name="" id=""
                                value="{{ $champ->tonnage_ant}}">
                        </div>

                        <div class="col-6  mb-4">
                            <input type="text" class="form-control" disabled name="" id=""
                                value="{{ $champ->superficie}}">
                        </div>
                        <div class="col-12  mb-4">
                            <textarea name="" id="" disabled cols="73" rows="5">{{ $champ->description}}</textarea>
                        </div>
                        <div class="col-12  mb-4">
                            <input type="text" class="form-control" disabled name="" id=""
                                value="{{ $champ->origine_geo}}">
                        </div>
                        <div class="col-6  mb-4">
                            <input type="text" class="form-control" disabled name="" id=""
                                value="{{ $champ->date_production}}">
                        </div>

                        <div class="col-6  mb-4">
                            <input type="text" class="form-control" disabled name="" id=""
                                value="{{ $champ->date_recolte}}">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

  
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <a href="" download> {{ $qrcode }}</a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Ajouter un événement
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Evenement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('event_store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" id="">
                        <input type="hidden" name="champ_id" value="{{ $champ->id }}" id="">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Types Evenements</label>
                                    <select class="form-select form-select-sm mb-3" name="type_event_id">
                                        <option selected="">-- select --</option>
                                        @foreach($typevents as $type)
                                        <option value="{{ $type->id }}">{{ $type->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div><!-- Col -->
                            <!-- Row -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label"> Date Evenements :</label>
                                        <input type="date" name="date_event" class="form-control" placeholder="Date Event">
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Lieux</label>
                                        <input type="text" class="form-control" name="lieux" placeholder="Lieux de Event">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Temperature en C° :</label>
                                        <input type="number" class="form-control" name="temperature" placeholder="Temperature">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Humidite en % :</label>
                                        <input type="text" class="form-control" name="humidite" placeholder="Lieux de Event">
                                    </div>
                                </div>
                                <!-- Col -->
                                <!-- Row -->
                              
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Ajouter l'evernement</button>
                                </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>




@endsection