@extends('layouts.guest')

@section('content')
  <div class="card ml-auto mr-auto my-5 shadow-lg bg-light rounded" style="width: auto;">
    <div class="card-body">
      <h4 class="card-title"> Extrait n°{{ $document->code }}</h4>

        <p class="card-text">
            Mairie d'origine :
            <span class="text-bold">
                {{ $document->mayor->libel }}
            </span>
        </p>

        <p class="card-text">
            Commune :
            <span class="text-bold">
                {{ $document->mayor->commune->name }}
            </span>
        </p>

        <p class="card-text">
            Nom :
            <span class="text-bold">
                {{ $document->child->name }}
            </span>
        </p>

        <p class="card-text">
            Prénom :
            <span class="text-bold">
                {{ $document->child->lname }}
            </span>
        </p>

        <p class="card-text">
            Date de naissance :
            <span class="text-bold">
                {{ $document->child->birthday }}
            </span>
        </p>

        <p class="card-text float-right">
            Date d'émission :
            <span class="text-bold">
                {{ $document->created_at }}
            </span>
        </p>

        <a href="#" class="btn btn-primary mt-5">Télécharger</a>
    </div>
  </div>

@endsection
