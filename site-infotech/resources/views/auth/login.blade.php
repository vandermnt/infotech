<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login | Infotech</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div id="app">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-7 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <img src="assets/images/logo.png" id="logo">
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-container">
                                <input
                                    type="text"
                                    id="email"
                                    name="email"
                                    class="input {{ $errors->has('email') ? 'is-invalid' : ''}}"
                                    value="{{old('email')}}">
                                <label class="label" for="email" id="lEmail">E-mail</label>

                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <p>{{ $errors->first('email') }}</p>
                                    </div>
                                @endif
                            </div>

                            <div class="input-container">
                                <input
                                    type="password"
                                    id="senha"
                                    name="senha"
                                    class="input {{ $errors->has('senha') ? 'is-invalid' : '' }}"
                                    value="{{old('senha')}}">
                                <label class="label" for="senha" id="lSenha">Senha</label>

                                @if($errors->has('senha'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('senha') }}
                                    </div>
                                @endif
                            </div>

                            @if (session('error'))
                                <div class="col-sm-12">
                                    <div class="alert alert-dismissible fade show" role="alert" style="color: red">
                                        <img src="{{asset('assets/images/erro.svg')}}" style="width: 20px; margin-right: 10px">
                                        {{ session('error') }}

                                    </div>
                                </div>
                            @endif


                            <div class="input-container">
                                <button type="submit" class="btn">
                                    {{ __('Entrar') }}
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="rodape row">
            <p>Todos os direitos reservados &#9400; 2020 | InfoTech Soluções em Tecnologia.</p>
        </div>
    </div>
</div>
</body>
</html>
