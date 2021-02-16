@extends('layouts.guest')

@section('content')

<div class="my-5 shadow-xs bg-light rounded p-4">

    <h4 class=""> {{ $title }}</h4>

    <hr>

    <div class="form">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session("code"))
            <div class="alert alert-danger text-center">
                {{ session('code') }}
            </div>
        @endif

        <form action="{{ route($route) }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="code" class="form-label">Code du document : </label>
                <input type="text" class="form-control" name="code" id="code" placeholder="Ex : AB5432EFG" value="19GJTWD67HDONJ">
              </div>

              <div class="row">
                  <div class="mb-3 col-sm-6">
                      <label for="code" class="form-label">Entrez votre nom : </label>
                      <input type="text" class="form-control" name="name" id="code" placeholder="Ex : Dieke" value="Bethel">
                    </div>

                  <div class="mb-3 col-sm-6">
                      <label for="code" class="form-label">Entrez votre prénom : </label>
                      <input type="text" class="form-control" name="lname" id="code" placeholder="Ex : Jonathan" value="Hickle">
                </div>
              </div>

              <button class="btn btn-success" type="submit">Continuer</button>

        </form>

    </div>

</div>

@stop
