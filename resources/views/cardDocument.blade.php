@extends('layouts.guest')

@section('content')
  <div class="card ml-auto mr-auto my-5 shadow-xs " style="width:auto;  background-color : rgba(255, 166, 0, 0.7)" >
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
                {{ $document->updated_at }}
            </span>
        </p>

        @if (! empty($route))
            @if ($route ==="sendRequest")
                <form action="{{ route($route, $document) }}" method="POST">
                    @csrf
                    <input type="hidden" name="document_id" value="{{ $document->id }}">
                    <button type="submit" class="btn btn-outline-success mt-5">{{ $buttonTitle }}</button>
                </form>
            @elseif($route === 'pay')
                <form action="{{ route($route) }}" method="post">
                    @csrf
                    <input type="hidden" name="code" value="{{ $document->code }}">
                    <button type="submit" class="btn btn-outline-success mt-5">{{ $buttonTitle }}</button>
                </form>
            @endif
        @else
            <button type="submit" class="btn btn-outline-success mt-5">{{ $buttonTitle }}</button>
        @endif


    </div>
  </div>

@endsection
