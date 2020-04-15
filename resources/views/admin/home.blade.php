@extends('layouts.app')

@section('title', 'ADMIN')

@section('content')
<div class="container">
    <div>
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link active" href="/admin">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gerenciar Produtos</a>
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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged!
                </div>
                <div class="card-body">
                    @if(isset($imoveis))
                    numero de produtos cadastrados: {{$imoveis->count()}}
                    @endif
                </div>
                <div class="card-body">
                    @if(isset($users))
                    numero de usuarios cadastrados: {{$users->count()}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
