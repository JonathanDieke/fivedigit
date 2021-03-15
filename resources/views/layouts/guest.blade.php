<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="APP3 Project">
        <meta name="author" content="Jonathan Dieke">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @if (config("app.env") ==="local")
            <!-- Bootstrap core CSS -->
            <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        @else
                <!-- CSS only -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        @endif



        @if (Route::is("login"))

            <!-- Fonts -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}" defer></script>

        @endif

        @if (config("app.env") ==="local")
          <script src="{{ asset('js/jquery.js') }}"></script>
          <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        @endif

        @if ($script ?? $script=null)
          <script src="{{ asset('js/'.($script).'.js') }}" defer></script>
        @endif

        @push('scripts')
            <script >
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
        @endpush

        <style>
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            #loading {
                background-color:transparent;
                position: fixed;
                z-index: 10;
            }
        </style>

    </head>
    <body @if(Route::is("refreshed"))
                    style="background-image:url({{ asset('img/armoirie2.png') }}) ;
                                background-repeat:no-repeat;
                                background-position:50% 100%;
                                background-size: 40% auto;"
                @endif;>

        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container">
                <x-application-logo style="height: 40px; width:40px" />
                <a class="navbar-brand" href="{{ route('welcome')  }}">{{ config('app.name') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mr-auto">
                      @auth
                          <li class="nav-item">
                              <a class="nav-link {{ set_active_route('dashboard') }}" href="{{ route('dashboard') }}">Tableau de bord</a>
                          </li>
                      @endauth
                    <li class="nav-item">
                      <a class="nav-link {{ set_active_route('request') }} {{ set_active_route('requested') }}" aria-current="page" href="{{ route('request') }}">Demander un document</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ set_active_route('refresh') }} {{ set_active_route('refreshed') }} {{ set_active_route('pay') }}" href="{{ route('refresh') }}">Actualiser un document</a>
                    </li>
                    {{--  <li class="nav-item">
                      <a class="nav-link {{ set_active_route('consult') }} {{ set_active_route('consulted') }}" href="{{ route('consult') }}">Consulter un document</a>
                    </li>  --}}
                  </ul>
                    @guest
                            <a class="nav-link active" href="{{ route('login') }}" style="text-decoration: none; color: #0098C8">Se Connecter</a>
                    @else
                        <form action="{{ route('logout') }}" method="post" id="logout">
                            @csrf
                            <a role="button" onclick="document.getElementById('logout').submit()">Déconnexion</a>
                        </form>
                    @endguest
                </div>
              </div>
            </nav>
        </header>

        <main role="main">

            {{-- <div class="pt-4 container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Library</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav> --}}

            </div>

            @if (Route::is('login') || Route::is('register'))
                <div class="font-sans text-gray-900 antialiased">
                    {{ $slot }}
                </div>
            @else
                <div class="container body">

                    @if (session("success-request"))
                        <div class="alert alert-success text-center mt-4">
                            {{ session('success-request') }}
                        </div>
                    @endif

                    @if (session("already-request"))
                        <div class="alert alert-warning text-center mt-4">
                            {{ session('already-request') }}
                        </div>
                    @endif

                    @yield('content')
                </div>
            @endif

        </main>



        {{--  <footer class="text-bold">
            <div class="container">
                @if (!Route::is('login'))
                    <p class="float-right">
                        <a href="#">Retourner en haut &UpArrow;</a>
                    </p>
                @endif
                <p class="text-capitalize">Develop with &hearts; by {{ config("app.name") }} </p>
                <p class="text-muted">
                    Contacts :
                    <a href="#"> 53 48 88 36 / 67 08 16 08 </a>
                </p>
                <p class="text-muted text-center">
                    &copy; 2020 - {{ now()->year }} {{ config("app.name") }}
                </p>
            </div>

        </footer>  --}}



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

    </body>
</html>
