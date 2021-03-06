@extends('layouts.app')

@section('title', 'Deletar')

@section('content')
<div class="container">
    <div class="mb-5">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item border border-secondary">
                <a class="nav-link text-black" href="/admin">Home</a>
            </li>
            <li class="nav-item dropdown border border-secondary">
                <a class="nav-link text-black dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Gerenciar Produtos</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('imoveis.index')}}">Produtos</a>
                    <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=casa')}}">Casas</a>
                    <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=apartamento')}}">Apartamentos</a>
                    <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=kitnet')}}">kitnet</a>
                </div>
            </li>
            <li class="nav-item dropdown border border-secondary">
                <a class="nav-link text-black dropdown-toggle active" data-toggle="dropdown" href="#" role="button"
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
    <div class="row justify-content-center my-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Tem certeza que deseja remover?</div>
                <div class="card-body">
                    <form method="POST" action="{{route ('clientes.destroy', $cliente->id)}}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <h4 class="my-4">Login: {{$cliente->nomeEmp}}</h4>
                            <p>Nome: {{$cliente->nomeCliente}}</p>
                            <p>Sobrenome: {{$cliente->sobrenomeCliente}}</p>
                            <p>CPF: {{$cliente->cpfCliente}}</p>
                            <p>RG: {{$cliente->rgCliente}}</p>
                            <p>Status: {{$cliente->status}}</p>
                            <hr class="my-5">
                            <h4 class="my-4">Endereço</h4>
                            <p>Logradouro: {{$cliente->logradouroEndereco}}</p>
                            <p>Bairro: {{$cliente->bairroEndereco}}</p>
                            <p>Número: {{$cliente->numeroEndereco}}</p>
                            <p>CEP: {{$cliente->cepEndereco}}</p>
                            <p>Cidade: {{$cliente->cidadeEndereco}}</p>
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
