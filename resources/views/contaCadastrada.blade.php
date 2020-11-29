@extends('templates.cadastroSucesso')

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Conta Cadastrada Com Sucesso</h4>
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
                    <th scope="col">Detalhes</th>
                    <th scope="col">Quitado?</th>

                </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($dados as $item)
                                <td>{{$item}}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a type="button" class="btn btn-info" href="{{url('/')}}">Home</a>
            <a type="button" class="btn btn-primary float-right" href="{{route('cadastro.create')}}">Inserir Nova Conta</a>
        </div>

    </div>
@endsection
