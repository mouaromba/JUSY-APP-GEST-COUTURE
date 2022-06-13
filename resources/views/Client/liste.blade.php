@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">LISTE DES CLIENTS</h2>
            </marquee>
            <a href="{{route('gestion_client.create') }}">
                <button type="submit" class="btn btn-primary mb-2" style="width:250px"><h4> Nouveau client</h4></button>
            </a>
            <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Numero</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Email</th>
                        <th colspan="3">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->telephone}}</td>
                        <td>{{$client->adresse}}</td>
                        <td>{{$client->email}}</td>
                        <td> <a class="button" href="{{route('gestion_client.show', [$client->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td> <a class="button" href="{{route('gestion_client.edit', [$client->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td><a class="button" href="{{url('supprimer_client/'.$client->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                        @endforeach
                </tbody>
            </table>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection