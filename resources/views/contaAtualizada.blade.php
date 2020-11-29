@extends('templates.cadastroSucesso')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Conta Atualizada Com Sucesso</h4>
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome conta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Parcelas</th>
                    <th scope="col">Data de aquisição</th>
                    <th scope="col">Data de quitação</th>
                    <th scope="col">Parcelas Pagas</th>
                    <th scope="col">Quitado?</th>
                    <th scope="col">Data atualização</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$dados->nome}}</td>
                    <td>{{$dados->tipo}}</td>
                    <td>{{'R$ '.number_format($dados->valor, 2, ',', '.')}}</td>
                    <td>{{$dados->parcelas}}</td>
                    <td>{{\Carbon\Carbon::parse($dados->datInicio)->format('d/m/Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($dados->datFim)->format('d/m/Y')}}</td>
                    <td>{{$dados->parcelasPagas}}</td>
                    <td>{{$dados->quitado}}</td>
                    <td>{{\Carbon\Carbon::parse($dados->updated_at)->format('d/m/Y')}}</td>
                    <td>{{$dados->detalhes}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a type="button" class="btn btn-warning" href="{{url('/')}}">Home</a>
            <a type="button" class="btn btn-primary" href="{{route('cadastro.index')}}">Alterar Nova Conta</a>
        </div>

    </div>
@endsection
