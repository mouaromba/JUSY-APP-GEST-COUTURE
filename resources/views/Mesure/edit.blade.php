@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion de mesure</h2>
            </marquee>
            <h5 class="text-center mb-3">Remplissez le formulaire </h5>
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_mesure.update', [$finds->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" value="{{ $finds->nom }}" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prix</label>
                    <input type="number" min="15000" class="form-control" value="{{ $finds->prix }}" name="prix" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" value="{{ $finds->photo}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="container d-flex">
                    <div>
                        <button type="submit" class="btn btn-primary mb-4 w-120">Enregistrer</button>
                    </div> 
                </div>
            </form>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection