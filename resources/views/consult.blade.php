@extends('layouts.guest')

@section('content')

<div class="card my-4">
    <div class="card-header">
        <h3 class="text-center">
            Consultation de document
        </h3>
    </div>
    <div class="card-body">
        <form action="{{ route('consulted') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="code" class="form-label">Code du document : </label>
                <input type="text" class="form-control" name="code" id="code" placeholder="Ex : AB5432EFG" value="{{ old('code') }}">
              </div>
              <div class="row">
                  <div class="mb-3 col-sm-6">
                      <label for="code" class="form-label">Entrez votre nom : </label>
                      <input type="text" class="form-control" name="name" id="code" placeholder="Ex : Dieke" value="{{ old('name') }}">
                    </div>
                  <div class="mb-3 col-sm-6">
                      <label for="code" class="form-label">Entrez votre prénom : </label>
                      <input type="text" class="form-control" name="lname" id="code" placeholder="Ex : Jonathan" value="{{ old('lname') }}">
                    </div>
              </div>
              <button class="btn btn-success" type="submit">valider</button>
        </form>
    </div>
  </div>
@endsection
