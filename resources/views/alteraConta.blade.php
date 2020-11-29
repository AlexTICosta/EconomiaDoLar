@extends('templates.cadastroTemplate')

@section('content')

        <div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Alterar Conta</h4>
            </div>
            <div class="card-body">
                <form method="post" action="{{route('cadastro.update',['cadastro' => $getconta->id])}}">
                    @method('PATCH')
                    @csrf
                    {{--                <input type="hidden" name="token" value="{{csrf_token()}}">--}}
                    <div class="form-group row">
                        <label for="nome" class="col-sm-3 col-form-label">Conta</label>
                        <div class="col-sm-9">
                            <input value="{{$getconta->nome}}" type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Nome da Conta">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipo" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <input name="tipo" id="tipo" class="form-control form-control-sm" value="{{$getconta->tipo}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="valor" class="col-sm-3 col-form-label">Valor</label>
                        <div class="col-sm-9">
                            <input value="{{$getconta->valor}}" type="number" step="0.01" class="form-control form-control-sm" name="valor" id="valor" placeholder="Valor a pagar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="parcelas" class="col-sm-3 col-form-label">Total de Parcelas</label>
                        <div class="col-sm-9">
                            <input value="{{$getconta->parcelas}}" type="number" class="form-control form-control-sm" name="parcelas" id="parcelas" placeholder="Valor a pagar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datInicio" class="col-sm-3 col-form-label">Data Compra</label>
                        <div class="col-sm-9">
                            <input value="{{$getconta->datInicio}}" type="date" class="form-control form-control-sm" name="datInicio" id="datInicio" placeholder="Data da Compra">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="datFim" class="col-sm-3 col-form-label">Data Quitação</label>
                        <div class="col-sm-9">
                            <input value="{{$getconta->datFim}}" type="date" class="form-control form-control-sm" name="datFim" id="datFim" placeholder="Data de quitação da conta">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="parcelasPagas" class="col-sm-3 col-form-label">Parcelas Pagas</label>
                        <div class="col-sm-9">
                            <input value="{{$getconta->parcelasPagas}}" type="number" class="form-control form-control-sm" name="parcelasPagas" id="parcelasPagas" placeholder="Parcelas Pagas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="detalhes" class="col-sm-3 col-form-label">Detalhes</label>
                        <div class="col-sm-9">
                            <textarea name="detalhes" id="detalhes" rows="5" required>
                                {{$getconta->detalhes}}
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="quitado" class="col-sm-3 col-form-label">Conta Quitada?</label>
                        <div class="row col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quitado" id="quitado1" value="1">
                                <label class="form-check-label" for="quitado1">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="quitado" id="quitado2" value="0">
                                <label class="form-check-label" for="quitado2">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a type="button" class="btn btn-warning btn-sm" href="{{route('cadastro.index')}}">Voltar</a>
                        <button class="btn btn-success float-right btn-sm">Alterar</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
