@extends('layouts.app')

@section('title', 'Produto')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="my-4">Login:{{$cliente->name}}</h4>
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
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
</div>
@endsection
