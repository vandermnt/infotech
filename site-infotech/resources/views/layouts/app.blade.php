<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/icon.png"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Infotech</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/padrao/jquery.dataTables.1.10.20.min.js') }}" defer></script>
    <script src="{{ asset('js/padrao/dataTables.bootstrap.1.10.20.min.js') }}" defer></script>
    <script src="{{ asset('js/padrao/dataTables.fixedHeader.3.1.6.min.js') }}" defer></script>
    <script src="{{ asset('js/padrao/dataTables.responsive.2.2.3.min.js') }}" defer></script>
    <script src="{{ asset('js/padrao/responsive.bootstrap.2.2.3.min.js') }}" defer></script>
    <script src="{{ asset('js/menu.js') }}" defer></script>

    <script src="@yield('fatura_js')" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/font-awesome/all.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/padrao/dataTables.bootstrap.1.10.20.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/padrao/fixedHeader.bootstrap.3.1.6.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/padrao/responsive.bootstrap.2.2.3.min.css') }}" rel="stylesheet">

    <link href="@yield('fatura')" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div class="wrapper d-flex align-items-stretch">

            <nav id="sidebar" class="active">
                <div class="custom-menu py-4 text-center">
                    <a href="{{route('main')}}" class="logo">
                        <img src="./assets/images/image_logo.png" id="reduzido">
                        <img src="./assets/images/logo_branco.png" id="expandido">
                    </a>
                </div>


                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ route('fatura.index') }}"><span class="fas fa-file-invoice-dollar py-2 icone-menu" title="Faturas"></span> <span id="text">Faturas</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="fas fa-sign-out-alt py-2 icone-menu" title="Sair"></span> <span id="text">Sair</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        Copyright &copy; 2020
                        Todos os direitos reservados | Infotech Soluções em Tecnologia
                    </p>
                </div>
            </nav>

            <div id="content" class="p-4 p-md-3">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only"></span>
                    </button>
                </div>

                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
