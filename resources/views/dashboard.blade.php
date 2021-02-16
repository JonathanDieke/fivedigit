
@extends('layouts.guest', ["script" => "payment"])

@section('content')
    <div class="mt-4 pt-4">

        <div class="row">

            <div class="col-md-6 col-lg-4 col-12 py-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Document n° : ...</h5>
                  <p class="card-text">Nom & Prénoms : ....</p>
                  <p class="card-text">Date d'émission : ...</p>
                  <a href="#" class="btn btn-primary btn-sm">Télécharger </a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-12 py-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Document n° : ...</h5>
                  <p class="card-text">Nom & Prénoms : ....</p>
                  <p class="card-text">Date d'émission : ...</p>
                  <a href="#" class="btn btn-primary btn-sm">Télécharger </a>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 col-12 py-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Document n° : ...</h5>
                  <p class="card-text">Nom & Prénoms : ....</p>
                  <p class="card-text">Date d'émission : ...</p>
                  <a href="#" class="btn btn-primary btn-sm">Télécharger </a>
                </div>
              </div>
            </div>

    </div>
@endsection



{{--  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bienvenue
                </div>
            </div>
        </div>
    </div>
</x-app-layout>  --}}
