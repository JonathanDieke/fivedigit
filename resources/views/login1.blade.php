@extends('master')


@section('content')

    <div class="d-flex justify-content-center">

    </div>
<form class="form-signin py-5">
    <div class="text-center mb-4">
        {{-- <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> --}}
        <h1 class="h3 mb-3 font-weight-normal">{{config('app.name')}}</h1>
    </div>

    <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Code de connexion</label>
    </div>

    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se Connecter </button>
</form>
@endsection
