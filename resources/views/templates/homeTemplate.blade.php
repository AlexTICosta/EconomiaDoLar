<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ $title ?? 'Painel de produtos' }}</title>
    {{-- bootstrap--}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Inconsolata:wght@300;400;900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="{{url('assets/css/home.css')}}">
</head>
<body class="body-content">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Noso Controle de Contas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a type="button" class="nav-link btn btn-outline-danger" href="{{url('/cadastro/create')}}">Inserir Conta <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item active">
                <a type="button" class="nav-link btn btn-outline-warning" href="{{url('/conta-mes')}}">Gastos no mês</a>
            </li>
            <li class="nav-item active">
                <a type="button" class="nav-link btn btn-outline-secondary" href="#">Gastos Constântes</a>
            </li>
            <li class="nav-item active">
                <a type="button" class="nav-link btn btn-outline-info" href="{{route('cadastro.index')}}">Contas Cadastradas</a>
            </li>
            <li class="nav-item active">
                <a type="button" class="nav-link btn btn-outline-primary" href="{{url('/')}}">Home</a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
@stack('scripts')

</body>
</html>
