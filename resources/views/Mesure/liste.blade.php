@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded"> Prenez vos mésures </h2>
            </marquee>
            <a href="{{route('gestion_mesure.create') }}">
                <button type="submit" class="btn btn-primary mb-2" style="width:250px"> <h4>Nouvelle mésure</h4></button>
            </a>
            <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Email</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mesures as $mesure)
                    <tr>
                        <th scope="row">{{$mesure->id}}</th>
                        <td>{{$mesure->Client->nom}}</td>
                        <td>{{$mesure->Client->prenom}}</td>
                        <td>{{$mesure->Client->telephone}}</td>
                        <td>{{$mesure->Client->adresse}}</td>
                        <td>{{$mesure->Client->email}}</td>
                        <td> <a class="button" href="{{route('gestion_mesure.show', [$mesure->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td> <a class="button" href="{{route('gestion_mesure.edit', [$mesure->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td><a class="button" href="{{url('supprimer_mesure/'.$mesure->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                        @endforeach
                </tbody>
            </table>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection