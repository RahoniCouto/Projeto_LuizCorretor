@extends('layouts.app')

@section('title', 'Produto')

@section('content')
    <div class="container">
        <div class="mb-5">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item border border-secondary">
                    <a class="nav-link text-black" href="/admin">Home</a>
                </li>
                <li class="nav-item dropdown border border-secondary">
                    <a class="nav-link text-black dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">Gerenciar Produtos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('imoveis.index')}}">Produtos</a>
                        <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=casa')}}">Casas</a>
                        <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=apartamento')}}">Apartamentos</a>
                        <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=kitnet')}}">kitnet</a>
                    </div>
                </li>
                <li class="nav-item dropdown border border-secondary">
                    <a class="nav-link text-black dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Gerenciar de clientes</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('clientes.index')}}">Clientes</a>
                        <a class="dropdown-item" href="{{route('clientes.index', 'status=contatar')}}">Contatar</a>
                        <a class="dropdown-item" href="{{route('clientes.index', 'status=contatados')}}">Contatados</a>
                        <a class="dropdown-item" href="{{route('clientes.index', 'status=vendidos')}}">Vendidos</a>
                    </div>
                </li>
                <li class="nav-item dropdown border border-secondary">
                    <a class="nav-link text-black dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Solicitações</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('solicitacao.index')}}">Solicitações</a>
                        <a class="dropdown-item" href="{{route('solicitacao.index', 'solicitacao=vender')}}">Vendas</a>
                        <a class="dropdown-item" href="{{route('solicitacao.index', 'solicitacao=comprar')}}">Compras</a>
                    </div>
                </li>
                <li class="nav-item border border-secondary">
                    <a class="nav-link text-black" href="{{route('imoveis.create')}}">Cadastrar Produto</a>
                </li>
            </ul>
        </div>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-body">  
                <div class="row">
                    <div class="col-md-12">
                        <h4>Sobre o imóvel</h4>
                        <p>Nome: {{$imovel->nomeEmp}}</p>
                        <p>Descrição: {{$imovel->descricao}}</p>
                        <p>Preço: R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                        <p>Quantidade de Quartos: {{$imovel->qtdQuartos}}</p>
                        <p>Tipo: {{$imovel->tipo}}</p>
                        <p>Finalidade: {{$imovel->finalidade}}</p>
                        <hr>
                        <h4>Endereço</h4>
                        <p>Logradouro: {{$imovel->logradouroEndereco}}</p>
                        <p>Bairro: {{$imovel->bairroEndereco}}</p>
                        <p>Número: {{$imovel->numeroEndereco}}</p>
                        <p>CEP: {{$imovel->cepEndereco}}</p>
                        <p>Cidade: {{$imovel->cidadeEndereco}}</p>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
    </div>
@endsection