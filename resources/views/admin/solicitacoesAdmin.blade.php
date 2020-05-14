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
            <div class="row justify-content-between my-4">
                <div class="panel-heading center"><h4>Lista de Solicitações</h4></div>
                <form method="GET" action="{{route('imoveis.index', 'buscar' )}}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Digite o nome da cidade" name="buscar">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">Pesquisar</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Endereço</th>
                                <th>Cidade</th>
                                <th>Valor</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitacoes as $solicitacao)
                            <tr>
                                <td>{{$solicitacao->tipoVC}}</td>
                                <td>{{$solicitacao->bairroEnderecoVC}}</td>
                                <td>{{$solicitacao->cidadeEnderecoVC}}</td>
                                <td>R${{number_format($solicitacao->valorMin, 2, ',', '.')}}</td>
                                <td>R${{number_format($solicitacao->valorMax, 2, ',', '.')}}</td>
                                <td>
                                    {{-- <a href="{{route('imoveis.edit', $solicitacao->id)}}"><i class="fas fa-pen"></i></a> --}}
                                    <a href="{{route('solicitacao.remover', $solicitacao->id)}}"><i class="fas fa-trash-alt"></i></a>
                                    <a href="{{route('solicitacao.show', $solicitacao->id)}}"><i class="fas fa-search-plus"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center">
                {{ $solicitacoes->links() }}
            </div>
        </div>
    </div>
@endsection