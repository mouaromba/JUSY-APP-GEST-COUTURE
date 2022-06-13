@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquees behavior="">
                <h2 class=" text-center btn-primary">SOYEZ LES BIENVENUES DANS JUSY-APP-COUTURE</h2>
            </marquee>
            <div  class="col-md-12 slide shadow p-2 mb-2 bg-body d-flex " >
                
                      <div class="inner col-md-4 ">
                   
                        <img src="{{ asset('Images/b.webp')}}" class="d-block w-100" style="height:250px" alt="">
                        
                            <h5>Notre travail est votre satisfaction</h5>
                        </div>
                        <div class="item col-md-4">
                        </div>
                    
                       <div class="item col-md-4">
                        <img src="{{ asset('Images/h.jpg')}}" class="d-block w-100" style="height:250px" alt="...">
                        
                            <h5>Nos meilleurs modeles sont vos choix</h5>
                        </div>
                    
                </div>
            </div>
            @include('require.footer')
        </div>
    </div>
    @endsection