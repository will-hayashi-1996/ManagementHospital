<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Listagem de Médicos</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <img src="{{asset('/images/medico-icone.png')}}"  width="42px" height="42px" class="ml-2">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Aplicativo de Listagem de Médicos
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
   
                            <li class="nav-item">
                                <a href="{{ route('inserir') }}" class="nav-link"> Inserir Médico</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('pesquisar',1) }}" class="nav-link"> Pesquisar Médico por CPF</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('pesquisar',2) }}" class="nav-link"> Pesquisar Médico por CRM</a>
                            </li>

                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
