@extends('templates.homeTemplate')

@section('content')
    {{$dados}}
    <div class="jumbotron jumbotron-fluid">
        <div class="row">
            <div class="container col-sm-12 col-md-12">
                <h1 class="display-4">Nossa Família, Nossa Maior Riqueza</h1>
                <p class="lead">"Agora, pois, permanecem a fé, a esperança e o amor, estes três, mas o maior destes é o amor."

                </p> <p><b> 1 Coríntios 13:13 </b></p>
            </div>

        </div>
    </div>
    @if( isset($dados))
        <section class="content">
            @foreach($dados as $item)
                @if($item->tipo == 'Fixo mensal')
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->tipo}}</h5>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">R$ </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Usuário" value="{{array_sum($item->valor)}}">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="container-fluid">

            </div>
        </section>
    @endif

@endsection

