@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire pour le payement</h2>
            </marquee>
            <h5 class="text-center mb-3">Remplissez le formulaire.</h5>
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_payement.update', [$finds->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Prix_Total</label>
                    <input type="date" class="form-control" value="{{ $finds->prix_total }}" name="Prix_Total" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Avance</label>
                    <input type="text" class="form-control" value="{{ $finds->avance }}" name="Avance" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Reste</label>
                    <input type="number" class="form-control" value="{{ $finds->reste }}" name="reste" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="container d-flex mb-4">
                    <div>
                        <button type="submit" class="btn btn-primary w-100">Valider</button>
                    </div> 
                </div>
            </form>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection