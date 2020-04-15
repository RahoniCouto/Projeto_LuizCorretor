@extends('layouts.app')

@section('title', 'Cadastro de imóvel')

@section('content')
<div class="container">
    <div class="mb-5">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="/admin">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gerenciar Produtos</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/ProdutosAdmin">Produtos</a>
                <a class="dropdown-item" href="/casas">Casas</a>
                <a class="dropdown-item" href="/apartamentos">Apartamentos</a>
                <a class="dropdown-item" href="/kiynets">kitnet</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
              </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('imoveis.create')}}">Cadastrar Produto</a>
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

            <form method="post" action="{{route ('imoveis.store')}}">
                {{ csrf_field() }}
                <h4>Dados do imóvel</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao">Nome do Empreendimento</label>
                    <input type="text" class="form-control" name="nomeEmp" required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" class="form-control" name="descricao" required rows="4"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" name="preco" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="qtdQuartos">Quantidade de Quartos</label>
                            <input type="number" class="form-control" required name="qtdQuartos">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tipo">Tipo do imóvel</label>
                            <select class="form-control" name="tipo" required>
                                <option>Apartamento</option>
                                <option>Casa</option>
                                <option>Kitnet</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4>
                <hr>

                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" required name="logradouroEndereco">
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" required name="bairroEndereco">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input type="number" class="form-control" required
                                name="numeroEndereco">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cidadeEndereco">Cidade</label>
                            <input type="text" class="form-control" required name="cidadeEndereco">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cepEndereco">CEP</label>
                            <input type="text" class="form-control" required name="cepEndereco">
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
