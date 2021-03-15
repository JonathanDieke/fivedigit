@extends('layouts.guest', ["script" => "payment"])

@section('content')

    <div class="success">

    </div>

    <div class="my-5 shadow-xs rounded p-4" style=" background-color : rgba(255, 166, 0, 0.7)">
        <h1 class=" ">Méthodes de paiement</h1>

        <hr>

        <h3 class="my-4">Veuillez choisir un moyen de paiement :</h3>
        <form action="{{ route('paid') }}" method="post" class="row my-4">

            @csrf

            <fieldset class="col-sm-12 col-md-6 form-group ">
                <legend>Mobile Money</legend>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="om" value="om" checked>
                    <label class="form-check-label" for="om">
                        Orange Money
                    </label>
                    <div class="input-group mb-3 momo">
                        <span class="input-group-text" id="basic-addon1">+225</span>
                        <input type="text" name="phone" class="form-control phone" placeholder="XX XX XX XX XX" require>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="momo" value="momo">
                    <label class="form-check-label" for="momo">
                        MTN Mobile Money
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flooz" value=flooz>
                    <label class="form-check-label" for="flooz">
                        Flooz
                    </label>
                </div>
            </fieldset>


            <fieldset class="col-sm-12 col-md-6">
                <legend>Compte bancaire  (Bientôt disponible)</legend>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="visa">
                    <label class="form-check-label" for="visa">
                      Visa
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="mastercard">
                    <label class="form-check-label" for="mastercard">
                        Master Card
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                    <label class="form-check-label" for="paypal">
                        Paypal
                    </label>
                </div>
            </fieldset>


            <input type="hidden" class="code" name="code" value="{{ $code }}">
            <button type="submit" class="btn btn-outline-success ml-3 my-2 btn-payment">Continuer</button>

        </form>


    </div>

@endsection
