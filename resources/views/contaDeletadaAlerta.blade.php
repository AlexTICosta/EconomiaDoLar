@extends('templates.cadastroSucesso')

@section('content')

    <div class="card">
        <div class="card-header">
            Conta Deletada Com Sucesso
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$deletadaTexto}}</h5>
            <a href="{{route('cadastro.index')}}" class="btn btn-warning">Voltar</a>
        </div>
    </div>

@endsection
