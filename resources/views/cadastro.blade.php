@extends('templates.cadastroTemplate')

@section('content')


    <div class="card">
        <div class="card-header">
            <h4>Novo Cadastro de Conta</h4>

        @if( isset($errors) && count($errors) > 0)
            <div class="alert alert-danger col-sm-12">
                @foreach($errors->all() as $itemError)

                    <p>{{$itemError}}</p>

                @endforeach
            </div>
        @endif
        </div>
        <div class="card-body">
            <form method="post" action="{{route('cadastro.store')}}">
                {{--                @method('GET')--}}
                @csrf
                {{--                <input type="hidden" name="token" value="{{csrf_token()}}">--}}
                <div class="form-group row">
                    <label for="nome" class="col-sm-3 col-form-label">Conta</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" name="nome" id="nome" placeholder="Nome da Conta" value="{{old('nome')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipo" class="col-sm-3 col-form-label">Tipo</label>
                    <div class="col-sm-9">
                        <select name="tipo" id="tipo" class="form-control form-control-sm" >
                            <option value="{{old('tipo')}}">Selecione</option>
                            @foreach($tipo as $item)
                                <option  value="{{$item}}">{{$item}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="valor" class="col-sm-3 col-form-label">Valor</label>
                    <div class="col-sm-9">
                        <input type="number" step="0.01" class="form-control form-control-sm" name="valor" id="valor" placeholder="Valor a pagar" value="{{old('valor')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parcelas" class="col-sm-3 col-form-label">Total de Parcelas</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" name="parcelas" id="parcelas" placeholder="Quant. Parcelas" value="{{old('parcelas')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="datInicio" class="col-sm-3 col-form-label">Data Compra</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control form-control-sm" name="datInicio" id="datInicio" placeholder="Data da Compra" value="{{old('datInicio')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="datFim" class="col-sm-3 col-form-label">Data Quitação</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control form-control-sm" name="datFim" id="datFim" placeholder="Data de quitação da conta" value="{{old('datFim')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="parcelasPagas" class="col-sm-3 col-form-label">Parcelas Pagas</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control form-control-sm" name="parcelasPagas" id="parcelasPagas" placeholder="Parcelas Pagas" value="{{old('parcelasPagas')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="detalhes" class="col-sm-3 col-form-label">Detalhes da Conta</label>
                    <div class="col-sm-9">
                        <textarea name="detalhes" id="detalhes" cols="68" rows="3" value="{{old('detalhes')}}"></textarea>
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
                    <a type="button" class="btn btn-warning btn-sm" href="{{url('/')}}">Voltar</a>
                    <button class="btn btn-primary float-right btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>

    </div>
@endsection
