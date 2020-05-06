@extends('layouts.app')

@section('title', 'ADMIN')

@section('content')
<div class="container">
    <div class="mb-5">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="/admin">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false">Gerenciar Produtos</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item active" href="{{route('imoveis.index')}}">Produtos</a>
                    <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=casa')}}">Casas</a>
                    <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=apartamento')}}">Apartamentos</a>
                    <a class="dropdown-item" href="{{route('imoveis.index', 'tipo=kitnet')}}">kitnet</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="true" aria-expanded="false">Gerenciar de clientes</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('clientes.index')}}">Clientes</a>
                    <a class="dropdown-item" href="{{route('clientes.index', 'status=contatar')}}">Contatar</a>
                    <a class="dropdown-item" href="{{route('clientes.index', 'status=contatados')}}">Contatados</a>
                    <a class="dropdown-item" href="{{route('clientes.index', 'status=vendidos')}}">Vendidos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('imoveis.create')}}">Cadastrar Produto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/home">Pagina inicial</a>
            </li>
        </ul>
    </div>
    <div class="panel panel-default">
        <div class="row justify-content-between my-4">
            <div class="panel-heading center"><h4>Lista de Imóveis</h4></div>
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
                            <th>nome</th>
                            <th>Cidade</th>
                            <th>Preço</th>
                            <th>Tipo</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($imoveis as $imovel)
                        <tr>
                            <td>{{$imovel->nomeEmp}}</td>
                            <td>{{$imovel->cidadeEndereco}}</td>
                            <td>R${{number_format($imovel->preco, 2, ',', '.')}}</td>
                            <td>{{$imovel->tipo}}</td>
                            <td>
                                <a href="{{route('imoveis.edit', $imovel->id)}}"><i class="fas fa-pen"></i></a>
                                <a href="{{route('imoveis.remover', $imovel->id)}}"><i class="fas fa-trash-alt"></i></a>
                                <a href="{{route('imoveis.show', $imovel->id)}}"><i class="fas fa-search-plus"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            {{ $imoveis->links() }}
        </div>
    </div>
</div>
@endsection
