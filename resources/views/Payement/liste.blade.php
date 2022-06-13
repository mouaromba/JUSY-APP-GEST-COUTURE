@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h4 class="text-center mt-2 text-primary shadow p-2 mb-2 bg-body rounded">LISTE DE PAYEMENT</h4>
            </marquee>
            <a href="{{route('gestion_payement.create') }}">
                <button type="submit" class="btn btn-primary mb-2" style="width:250px"><h4>Nouveau payement</h4></button>
            </a>
            <table class="table shadow p-2 mb-2 bg-body rounded" id="myTable">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Telephone</th>
                        <th colspan="3" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payements as $payement) 
                    <tr>
                        <th scope="row">{{$payement->id}}</th>
                        <td>{{$payement->Client->nom}}</td>
                        <td>{{$payement->Client->prenom}}</td>
                        <td>{{$payement->Client->telephone}}</td>
                        
                        <td> <a class="button" href="{{route('gestion_payement.show', [$payement->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td> <a class="button" href="{{route('gestion_payement.edit', [$payement->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td><a class="button" href="{{url('gestion_payement/'.$payement->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                        @endforeach
                </tbody>
            </table>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection