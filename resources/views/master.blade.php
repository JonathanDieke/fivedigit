<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="APP3 Project">
    <meta name="author" content="Jonathan Dieke">
    <title>Five Digit</title>

    <!-- Bootstrap core CSS -->
{{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    @if (Route::is("login"))
        <style>
            html, body {
            height: 100%;
            }

            .form-signin {
            width: 100%;
            max-width: 420px;
            padding: 15px;
            margin: auto;
            }

            .form-label-group {
            position: relative;
            margin-bottom: 1rem;
            }

            .form-label-group input,
            .form-label-group label {
            height: 3.125rem;
            padding: .75rem;
            }

            .form-label-group label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0; /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            pointer-events: none;
            cursor: text; /* Match the input under the label */
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
            }

            .form-label-group input::-webkit-input-placeholder {
            color: transparent;
            }

            .form-label-group input::-moz-placeholder {
            color: transparent;
            }

            .form-label-group input:-ms-input-placeholder {
            color: transparent;
            }

            .form-label-group input::-ms-input-placeholder {
            color: transparent;
            }

            .form-label-group input::placeholder {
            color: transparent;
            }

            .form-label-group input:not(:-moz-placeholder-shown) {
            padding-top: 1.25rem;
            padding-bottom: .25rem;
            }

            .form-label-group input:not(:-ms-input-placeholder) {
            padding-top: 1.25rem;
            padding-bottom: .25rem;
            }

            .form-label-group input:not(:placeholder-shown) {
            padding-top: 1.25rem;
            padding-bottom: .25rem;
            }

            .form-label-group input:not(:-moz-placeholder-shown) ~ label {
            padding-top: .25rem;
            padding-bottom: .25rem;
            font-size: 12px;
            color: #777;
            }

            .form-label-group input:not(:-ms-input-placeholder) ~ label {
            padding-top: .25rem;
            padding-bottom: .25rem;
            font-size: 12px;
            color: #777;
            }

            .form-label-group input:not(:placeholder-shown) ~ label {
            padding-top: .25rem;
            padding-bottom: .25rem;
            font-size: 12px;
            color: #777;
            }


        </style>
    @endif


  </head>


  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">

          <div class="row">
            {{-- <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div> --}}
            <div class="col-sm-8 py-4">
              <h4 class="text-white">Liens</h4>
              <ul class="list-unstyled">
                  @auth
                    <li><a href="#" class="text-primary">Se Déconnecter </a></li>
                  @else
                    <li><a href="{{ route('login') }}" class="text-primary">Se Connecter </a></li>
                    <li><a href="#" class="text-primary">Identifiants oubliés</a></li>
                  @endauth
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-secondary shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg> --}}
            {{-- <img src="{{ asset('img/logo.jpg') }}" alt="Five Digit" style="height: 20px; width:20px"> --}}
            <x-application-logo style="height: 40px; width:40px" />
            <strong> {{ config("app.name") }} </strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
    <div class="container">
        {{-- @yield('content') --}}
    </div>

    <footer class="text-bold @if(Route::is('login') ) {{'fixed-bottom'}} @endif">

        <div class="container">
            <p class="float-right">
                <a href="#">Retourner en haut &UpArrow;</a>
            </p>
            <p class="text-capitalize">Develop with &hearts; by {{ config("app.name") }} </p>
            <p class="text-muted">
                Contacts :
                <a href="#"> 53 48 88 36 / 67 08 16 08 </a>
            </p>
            <p class="text-muted text-center">
                &copy; 2020 - {{ now()->year }} {{ config("app.name") }}
            </p>
        </div>

    </footer>


@if (config("app.env") ==="local")

    <script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endif

@if (config("app.env") ==="production")

    <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>

@endif

</html>
