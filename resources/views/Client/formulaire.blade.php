@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
            <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">Formulaire d'ajout de clients</h2>
            </marquee>
    <h2 class="text-center mb-3 "> Remplissez le formulaire.</h2>
    <form method="POST" class="shadow p-1 mb-2 bg-body rounded" action="{{ route('gestion_client.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Téléphone</label>
            <input type="number" class="form-control" name="telephone" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-primary w-100">Enregistrer</button>
            </div> &nbsp;&nbsp;&nbsp;
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