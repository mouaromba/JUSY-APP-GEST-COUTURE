@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center text-primary shadow p-3 mb-5 bg-body rounded">Détail des mesures {{$finds->id}}</h2>
            </marquee>
            <div class="card m-3 shadow p-3 bg-body rounded" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title text-center text-primary">Détail Mesure</h5>
                            <p class="card-text">Epaule: {{$finds->epaule}}</p>
                            <p class="card-text">Manche: {{$finds->manche}}</p>
                            <p class="card-text">Taille: {{$finds->taille}}</p>
                            <p class="card-text">Cuisse: {{$finds->cuisse}}</p>
                            <p class="card-text">Poitrine: {{$finds->poitrine}}</p>
                            <p class="card-text">Hanche: {{$finds->hanche}}</p>
                            <p class="card-text">Bras: {{$finds->bras}}</p>
                            <p class="card-text">Dos: {{$finds->dos}}</p>
                            <p class="card-text">Jambe: {{$finds->jambe}}</p>
                            <p class="card-text">Pente: {{$finds->pente}}</p>
                            <p class="card-text">Bassin: {{$finds->bassin}}</p>
                            <p class="card-text">Ceinture: {{$finds->ceinture}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection