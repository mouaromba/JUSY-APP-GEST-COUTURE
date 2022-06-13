@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-2 text-primary shadow p-2 mb-2 bg-body rounded">Formulaire d'insertion de mésure</h2>
            </marquee>
            <h5 class="text-center mb-2">Remplissez le formulaire avant de valider.</h5>
            <form method="POST" class="shadow p-2 mb-2 bg-body rounded" action="{{ route('gestion_mesure.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Client</label>
                    <select class="form-control" name="clients_id" id="">
                        @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Epaule</label>
                    <input type="number" min="1" class="form-control" name="Epaule" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Manche</label>
                    <input type="number" min="1" class="form-control" name="Manche" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Taille</label>
                    <input type="number" min="1" class="form-control" name="Taille" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Cuisse</label>
                    <input type="number" min="1" class="form-control" name="Cuisse" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Poitrine</label>
                    <input type="number" min="1" class="form-control" name="Poitrine" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Hanche</label>
                    <input type="number" min="1" class="form-control" name="Hanche" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>               
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label"> Bras</label>
                    <input type="number" min="1" class="form-control" name="Bras" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Dos</label>
                    <input type="number" min="1" class="form-control" name="Dos" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Jambe</label>
                    <input type="number" min="1" class="form-control" name="Jambe" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
               
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Bassin</label>
                    <input type="number" min="1" class="form-control" name="Bassin" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Ceinture</label>
                    <input type="number" min="1" class="form-control" name="Ceinture" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="container d-flex">
                    <div>
                        <button type="submit" min="1" class="btn btn-primary w-150">Enregistrer</button>
                    </div> &nbsp;&nbsp;&nbsp;
                    <div>
                        <button type="reset" class="btn btn-danger w-120">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection