@extends('layouts.guest')

@section('content')

<div class="card my-4">
    <div class="card-header">
        <h3 class="text-center">
            Demande de document
        </h3>
    </div>
    <div class="card-body">
        <form action="{{ route('requested') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="code" class="form-label">Code du document : </label>
                <input type="text" class="form-control" name="code" id="code" placeholder="Ex : AB5432EFG">
              </div>
              <div class="row">
                  <div class="mb-3 col-sm-6">
                      <label for="code" class="form-label">Entrez votre nom : </label>
                      <input type="text" class="form-control" name="name" id="code" placeholder="Ex : Dieke">
                    </div>
                  <div class="mb-3 col-sm-6">
                      <label for="code" class="form-label">Entrez votre prénom : </label>
                      <input type="text" class="form-control" name="lname" id="code" placeholder="Ex : Jonathan">
                    </div>
              </div>
              <button class="btn btn-success" type="submit">valider</button>
        </form>
    </div>
  </div>
@endsection
