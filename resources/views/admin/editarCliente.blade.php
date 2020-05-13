@extends('layouts.app')

@section('title', 'Editar Produto')

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
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif
    <div class="panel panel-default">


        <div class="panel-body">

        <form method="post" action="{{route ('imoveis.update', $cliente->id)}}">
            <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <h4>Dados do Cliente</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao">Login do cliente</label>
                    <input type="text" class="form-control" name="name" required value="{{$cliente->name}}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nomeCliente">Nome</label>
                            <input type="text" class="form-control" name="nomeCliente" value="{{$cliente->nomeCliente}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sobrenomeCliente">Sobrenome</label>
                            <input type="text" class="form-control" required name="sobrenomeCliente" value="{{$cliente->sobrenomeCliente}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cpfCliente">CPF</label>
                            <input type="text" class="form-control" name="cpfCliente" value="{{$cliente->cpfCliente}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="rgCliente">RG</label>
                            <input type="text" class="form-control" required name="rgCliente" value="{{$cliente->rgCliente}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="descricao">Email</label>
                    <input type="text" class="form-control" name="email" required value="{{$cliente->email}}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="telCliente">Telefone</label>
                            <input type="text" class="form-control" name="telCliente" value="{{$cliente->telCliente}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="celCliente">Celular</label>
                            <input type="text" class="form-control" required name="celCliente" value="{{$cliente->celCliente}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status">Status do cliente</label>
                            <select class="form-control" name="status" value="{{$cliente->status}}" required>
                                <option {{($cliente->tipo == 'contatar' ? 'selected' : '')}}>Contatar</option>
                                <option {{($cliente->tipo == 'contatado' ? 'selected' : '')}}>Contatado</option>
                                <option {{($cliente->tipo == 'vendido' ? 'selected' : '')}}>Vendido</option>
                                <option {{($cliente->tipo == 'cancelado' ? 'selected' : '')}}>Cancelado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4>
                <hr>

                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" required name="logradouroEndereco" value="{{$cliente->logradouroEndereco}}">
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" required name="bairroEndereco" value="{{$cliente->bairroEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="number" class="form-control" required
                                name="numeroEndereco" value="{{$cliente->numeroEndereco}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cidadeEndereco">Cidade</label>
                            <input type="text" class="form-control" required name="cidadeEndereco" value="{{$cliente->cidadeEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cepEndereco">CEP</label>
                            <input type="text" class="form-control" required name="cepEndereco" value="{{$cliente->cepEndereco}}">
                        </div>
                    </div>
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection