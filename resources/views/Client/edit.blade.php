@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="">
            <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
            </marquee>
    <h5 class="text-center mb-3">Remplissez le formulaire ci-dessous.</h5>
    <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_client.update', [$finds->id]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" value="{{ $finds->prenom }}" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Téléphone</label>
            <input type="number" min="0" class="form-control" name="telephone" value="{{ $finds->telephone }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="{{ $finds->adresse }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $finds->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="container d-flex">
            <div>
                <button type="submit" class="btn btn-primary w-100">Modifier</button>
            </div> &nbsp;&nbsp;&nbsp;
        </div>
    </form>
            </div>
            @include('require.footer')
        </div>
    </div>
    @endsection