@extends('master')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p class="lead text-muted">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quisquam recusandae explicabo eos, autem, suscipit officiis aut animi praesentium beatae nisi reprehenderit, culpa laudantium quas vero accusantium eius maiores alias.
            <p>
            <a href="#" class="btn btn-primary my-2">Fonction principale</a>
            <a href="#" class="btn btn-secondary my-2">Fonctoin secondaire</a>
        </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <p class="card-text">
                                Faciliter vous la vie ! Restez chez vous et faites une demande de vos documents administratifis, en seulement quelques clics.
                                {{-- Faire une demande de documents : --}}
                                {{-- / Payer pour une actualisation : Vous avez un compte mobile money ou une carte de crédit ? Alors payer en ligne pour une actualisation de votre document.
                                / Afficher son document : Consulter votre document pour d'éventuels modifications. --}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                                <div class="btn-group flex-fill">
                                    <button type="button" class="btn btn-sm btn-outline-primary">Demander un document</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <p class="card-text">
                                Vous avez un compte mobile money ou une carte de crédit ? Alors payer en ligne pour une actualisation de votre document.
                                {{-- Faire une demande de documents : Faciliter vous la vie ! Restez chez vous et faites une demande de vos documents administratifis, en seulement quelques clics. --}}
                                {{-- / Payer pour une actualisation : --}}
                                {{-- / Afficher son document : Consulter votre document pour d'éventuels modifications. --}}
                            </p>
                            <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                                <div class="btn-group flex-fill">
                                    <button type="button" class="btn btn-sm btn-outline-primary">Actualiser un document</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-lg">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <p class="card-text">
                                Consulter votre document à tout moment, dès que vous le souhaitez.
                                {{-- Faire une demande de documents : Faciliter vous la vie ! Restez chez vous et faites une demande de vos documents administratifis, en seulement quelques clics.
                                / Payer pour une actualisation : Vous avez un compte mobile money ou une carte de crédit ? Alors payer en ligne pour une actualisation de votre document. --}}
                                {{-- / Afficher son document : --}}
                            </p>
                            <br>
                            <div class="d-flex justify-content-between align-items-center flex-row-reverse">
                                <div class="btn-group flex-fill">
                                    <button type="button" class="btn btn-sm btn-outline-primary">Consulter un document</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>
    </div>

@endsection
