@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h4 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">LISTE DES MODELES</h4>
            </marquee>
            <a href="{{route('gestion_modele.create') }}">
                <button type="submit" class="btn btn-primary mb-2" style="width:250px"> <h4>Nouvel modele </h4></button>
            </a>
            <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
                <thead>
                    <tr class="bg-primary text-light">
                        <th scope="col">Numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prix</th>
                        <th colspan="3" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($modeles as $modele)
                    <tr>
                        <th scope="row">{{$modele->id}}</th>
                        <td>{{$modele->nom}}</td>
                        <td>{{$modele->prix}}</td>
                        <td> <a class="button" href="{{route('gestion_modele.show', [$modele->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td> <a class="button" href="{{route('gestion_modele.edit', [$modele->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td><a class="button" href="{{url('gestion_modele/'.$modele->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                        @endforeach
                </tbody>
            </table>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection