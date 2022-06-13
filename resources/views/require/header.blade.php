<nav class="navbar navbar-expand-lg navbar-primary bg-light shadow p-1 mb-1 bg-body rounded">
    <div class="container-fluid">
        <img src="{{ asset('Images/logo.jpg')}}" style="width:100px; height:100px" alt="">
        <div class=" collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('home') }} m-2">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <b>ACCUEIL </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_client.index') }}"><b>CLIENT </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_modele.index') }}"><b>MODELE </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_mesure.index') }}"><b>MESURE </b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_payement.index') }}"><b>PAYEMENT </b></a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2 text" id="myInput" onkeyup="myFunction()" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-light text-dark" type="submit">Recherche</button>
            </form>
        </div>
    </div>
</nav>