@extends('layouts.guest')

@section('content')

    <div class="mt-4">

        <section class="jumbotron text-center">
            <div class="container">
            <h1>DIGITFILES </h1>
            <p class="lead h4">
                La plateforme mise à votre disposition pour vous faciliter l’accès à vos extraits de naissance !
            </p>
            </div>
        </section>
    </div>

    <div class="album">
        <div class="container">

            <div class="row">

                <div class="col-md-6 col-12">
                    <div class="card mb-4 shadow-xs" style="border-color: rgba(255, 166, 0, 0.7)">
                        {{--  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>  --}}
                        <img src="{{ asset('img/request.jpeg') }}" class=" bd-placeholder-img card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                Faciliter vous la vie ! Restez chez vous et faites une demande de vos documents administratifis, en seulement quelques clics.
                                {{-- Faire une demande de documents : --}}
                                {{-- / Payer pour une actualisation : Vous avez un compte mobile money ou une carte de crédit ? Alors payer en ligne pour une actualisation de votre document.
                                / Afficher son document : Consulter votre document pour d'éventuels modifications. --}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                                <div class="btn-group flex-fill">
                                    <a href="{{ route('request') }}" class="btn btn-sm btn-outline-success">Demander un document</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="card mb-4 shadow-xs" style="border-color: rgba(255, 166, 0, 0.7)">
                        {{--  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>  --}}
                        <img src="{{ asset('img/refresh.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                Vous avez un compte mobile money ou une carte de crédit ? Alors payer en ligne pour une actualisation de votre document.
                                {{-- Faire une demande de documents : Faciliter vous la vie ! Restez chez vous et faites une demande de vos documents administratifis, en seulement quelques clics. --}}
                                {{-- / Payer pour une actualisation : --}}
                                {{-- / Afficher son document : Consulter votre document pour d'éventuels modifications. --}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                                <div class="btn-group flex-fill">
                                    <a href="{{ route('refresh') }}" class="btn btn-sm btn-outline-success">Actualiser un document</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--  <div class="col-md-4">
                    <div class="card mb-4 shadow-xs"  style="border-color: #28a745">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        <img src="{{ asset('img/consult.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                Consulter votre document à tout moment, dès que vous le souhaitez.
                                Faire une demande de documents : Faciliter vous la vie ! Restez chez vous et faites une demande de vos documents administratifis, en seulement quelques clics.
                                / Payer pour une actualisation : Vous avez un compte mobile money ou une carte de crédit ? Alors payer en ligne pour une actualisation de votre document.
                                / Afficher son document :
                            </p>
                            <br> <br>
                            <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                                <div class="btn-group flex-fill">
                                    <a href="{{ route('consult') }}" class="btn btn-sm btn-outline-success">Consulter un document</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  --}}



            </div>

        </div>
    </div>

@endsection
