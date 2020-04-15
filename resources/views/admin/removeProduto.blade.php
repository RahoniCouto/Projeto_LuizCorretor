@extends('layouts.app')

@section('title', 'Deletar')

@section('content')
<div class="container">
    <div>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="/admin">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Gerenciar Produtos</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('imoveis.index')}}">Produtos</a>
                    <a class="dropdown-item" href="/casas">Casas</a>
                    <a class="dropdown-item" href="/apartamentos">Apartamentos</a>
                    <a class="dropdown-item" href="/kiynets">kitnet</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('imoveis.create')}}">Cadastrar Produto</a>
            </li>
        </ul>
    </div>
    <div class="row justify-content-center my-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Tem certeza que deseja remover?</div>
                <div class="card-body">
                    <form method="POST" action="{{route ('imoveis.destroy', $imovel->id)}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <h4 class="my-4">Descrição: {{$imovel->nomeEmp}}</h4>
                            <p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                            <p>Quantidade de Quartos: {{$imovel->qtdQuartos}}</p>
                            <p>Tipo: {{$imovel->tipo}}</p>
                            <hr class="my-5">
                            <h4 class="my-4">Endereço</h4>
                            <p>Logradouro: {{$imovel->logradouroEndereco}}</p>
                            <p>Bairro: {{$imovel->bairroEndereco}}</p>
                            <p>Número: {{$imovel->numeroEndereco}}</p>
                            <p>CEP: {{$imovel->cepEndereco}}</p>
                            <p>Cidade: {{$imovel->cidadeEndereco}}</p>
                            <hr class="my-5">
                            <button type="submit" class="btn btn-danger"> Remover </button>
                            <a href="{{ url()->previous() }}" class="bnt "> Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
