@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-2 text-primary shadow p-2 mb-2 bg-body rounded">Formulaire de payement</h2>
            </marquee>
            <h5 class="text-center mb-1">Remplissez le formulaire</h5>
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_payement.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Nom Client</label>
                    <select class="form-control" name="clients_id" id="" aria-describedby="">
                         @foreach($clients as $client)
                             <option value= "{{$client->id}}">{{$client->nom}} {{$client->prenom}} </option>
                         @endforeach
                    </select>
                </div>

                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Nom Modele</label>
                    <select class="form-control" name="modeles_id" id="" aria-describedby="">
                         @foreach($modeles as $modele)
                             <option value="{{$modele->id}}">{{$modele->nom}}</option>
                         @endforeach
                    </select>
                </div>
                <div class="mb-2 mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Prix</label>
                    <input type="number" min="5000" class="form-control" name="prix" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Avance</label>
                    <input type="number" min="7500" class="form-control" name="avance" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Reste</label>
                    <input type="number" min="1" class="form-control" name="reste" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="container d-flex">
                    <div>
                        <button type="submit" class="btn btn-primary w-120"onclick="Calculer();">Enregistrer</button>
                    </div> 
                    <div>
                        <button type="reset" class="btn btn-danger w-100">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection