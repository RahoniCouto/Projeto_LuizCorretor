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
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif
    <div class="panel panel-default">


        <div class="panel-body">

        <form method="post" action="{{route ('imoveis.update', $imovel->id)}}">
            <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <h4>Dados do imóvel</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao">Nome do Empreendimento</label>
                    <input type="text" class="form-control" name="nomeEmp" required value="{{$imovel->nomeEmp}}">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" class="form-control" name="descricao" rows="4">{{$imovel->descricao}}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" name="preco" required value="{{$imovel->preco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qtdQuartos">Quantidade de Quartos</label>
                            <input type="number" class="form-control" required name="qtdQuartos" value="{{$imovel->qtdQuartos}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo">Tipo do imóvel</label>
                            <select class="form-control" name="tipo" value="{{$imovel->tipo}}" required>
                                <option {{($imovel->tipo == 'apartamento' ? 'selected' : '')}}>Apartamento</option>
                                <option {{($imovel->tipo == 'Casa' ? 'selected' : '')}}>Casa</option>
                                <option {{($imovel->tipo == 'Kitnet' ? 'selected' : '')}}>Kitnet</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4>
                <hr>

                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" required name="logradouroEndereco" value="{{$imovel->logradouroEndereco}}">
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" required name="bairroEndereco" value="{{$imovel->bairroEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="number" class="form-control" required
                                name="numeroEndereco" value="{{$imovel->numeroEndereco}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cidadeEndereco">Cidade</label>
                            <input type="text" class="form-control" required name="cidadeEndereco" value="{{$imovel->cidadeEndereco}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cepEndereco">CEP</label>
                            <input type="text" class="form-control" required name="cepEndereco" value="{{$imovel->cepEndereco}}">
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