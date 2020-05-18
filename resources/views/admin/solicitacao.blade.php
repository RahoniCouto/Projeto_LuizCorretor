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
                    <a class="dropdown-item" href="{{route('solicitacao.index')}}">Solicitações</a>
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
                        <h4>CLiente</h4><br>

                        <p>Nome: {{$solicitacao->solicitacao_id->nomeCliente}} {{$solicitacao->solicitacao_id->nomeSobrenome}}</p>
                        <p>Email: {{$solicitacao->solicitacao_id->email}}</p>
                        <p>Email: {{$solicitacao->solicitacao_id->celCliente}}</p><br>

                        <h4>CLiente</h4><br>

                        <p>Email: {{$solicitacao->tipoVC}}</p>
                        <p>Email: {{$solicitacao->bairroEnderecoVC}}</p>
                        <p>Email: {{$solicitacao->cidadeEnderecoVC}}</p>
                        <p>Email: {{$solicitacao->qtdQuartos}}</p>
                        <p>De: R$ {{number_format($solicitacao->valorMin, 2, ',', '.')}}</p>
                        <p>Até: R$ {{number_format($solicitacao->valorMax, 2, ',', '.')}}</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
    </div>
@endsection