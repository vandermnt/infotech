<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'InfoTech') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/menu.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/font-awesome/all.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="@yield('fatura_css')" rel="stylesheet">
</head>
<body>
    <div id="app">

        <div class="wrapper d-flex align-items-stretch">
            <nav id="sidebar" class="d-flex align-items-start flex-column">
                <div class="custom-menu p-2">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fas fa-bars" id="icon"></i>
                    </button>
                </div>
                <div class="img bg-wrap text-center py-4">
                    <div class="user-logo">
                        <img src="./assets/images/logo_branco.png" style="width: 150px">
                    </div>
                </div>
                <ul class="list-unstyled components mb-5" style="width: 100%">
                    <li class="active">
                        <a href="{{ route('fatura.index') }}" style="border-top: 1px solid rgba(255, 255, 255, 0.05);"><span class="fas fa-file-invoice-dollar mr-3"></span> Faturas</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="fas fa-sign-out-alt mr-3"></span> Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                            @csrf
                        </form>
                    </li>
                </ul>

                <span id="copyright" class="mt-auto">
                    Todos os direitos reservados Ⓒ 2020 | InfoTech Soluções em Tecnologia.
                </span>
            </nav>

            <div id="content" style="padding-top: 40px;">
                @yield('content')
            </div>
        </div>
    </div>
</body>

<script type="javascript">


</script>
</html>
