@extends('templates.cadastroSucesso')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Deletar Conta</h4>
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
                    <th scope="col">Detalhes Conta</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$deletada->nome}}</td>
                        <td>{{$deletada->tipo}}</td>
                        <td>{{'R$ '.number_format($deletada->valor, 2, ',', '.')}}</td>
                        <td>{{$deletada->parcelas}}</td>
                        <td>{{\Carbon\Carbon::parse($deletada->datInicio)->format('d/m/Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($deletada->datFim)->format('d/m/Y')}}</td>
                        <td>{{$deletada->parcelasPagas}}</td>
                        <td>{{$deletada->quitado == 1 ? "Sim":"Não"}}</td>
                        <td>{{$deletada->detalhes}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <p><strong>Deseja Realmente Deletar Esta Conta?</strong></p>
            <a type="button" class="btn btn-warning" href="{{route('cadastro.index')}}">Voltar</a>
            <a type="button" class="btn btn-danger float-right" href="{{url('/deletar',($deletada->id))}}">Deletar</a>
        </div>

    </div>
@endsection

