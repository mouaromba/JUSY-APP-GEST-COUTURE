@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
            </marquee>
            <h5 class="text-center mb-3">Remplissez le formulaire</h5>
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_modele.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prix</label>
                    <input type="number" min="5000" class="form-control" name="prix" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                   
                <div class="container d-flex">
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Envoyer</button>
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