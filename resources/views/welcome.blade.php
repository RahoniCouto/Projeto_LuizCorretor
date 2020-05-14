@extends('layouts.master')

@section('title', 'Home')

@section('content')

{{------ LOGO ------}}

<div class="Ecorretor">
    <img class="logo" src="{{ asset('/images/Logo.png') }}" alt="">
</div>

{{------ Slider Menu ------}}
<div id="home-slider" class="owl-carousel">
    <div class="menu-slide d-flex align-items-end justify-content-center"
        style="background-image: url(/images/bg_1.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#1 Bairro 1</a></h3>
    </div>
    <div class="menu-slide d-flex align-items-end justify-content-center"
        style="background-image: url(/images/bg_2.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#2 Bairro 2</a></h3>
    </div>
    <div class="menu-slide d-flex align-items-end justify-content-center"
        style="background-image: url(/images/bg_3.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#3 Bairro 3</a></h3>
    </div>
    <div class="menu-slide d-flex align-items-end justify-content-center"
        style="background-image: url(/images/bg_4.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#1 Bairro 4</a></h3>
    </div>
</div>

{{------ CV ------}}

<div class="container py-4">
    <div class="row d-flex">
        <div class="col-md-7 d-flex">
            <div class="d-flex flex-column justify-content-around">
                <h1 class="titulo align-self-center p-4">Como tudo começou</h1>
                <p class="p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse velit similique iure
                    nostrum
                    perferendis odio ullam facilis ut consequatur laudantium totam incidunt, consectetur cumque nulla,
                    tempora quasi obcaecati distinctio magni?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Nesciunt consequuntur culpa nulla reprehenderit, id quam ab nam corporis fugiat quis illo voluptate
                    quibusdam facilis neque eligendi unde deserunt temporibus quia.</p>
            </div>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-end corretor my-2"
            style="background-image: url(images/person_3.jpg);">
            <div class="btn btn-light my-3">Edmundo Corretor</div>
        </div>
    </div>
</div>

{{------ fale com o corretor ------}}

<div class="container">
    <div class="row d-flex">
        <div class="col-md-7 d-flex justify-content-center align-items-end contato my-2"
            style="background-image: url(images/bg_1.jpg);">
            @guest
            <button type="button" class="btn btn-light my-3">
                <a class="text-black" href="{{ route('login') }}">Fale com o corretor</a>
            </button>
            @endguest
            @auth
            <button type="button" class="btn btn-light my-3" data-toggle="modal" data-target=".bd-example-modal-lg">
                Fale com o corretor
            </button>
            @endauth
        </div>
        <div class="col-md-5 d-flex">
        </div>
    </div>
</div>

{{------ Produtos ------}}

<section class="container py-4">
    <div class="d-flex flex-column">
        <h1 class="align-self-center">Produtos</h1>


        <div id="produtos-carousel" class="card-group owl-carousel">
            <div class="card border-secondary text-center bg-light h-100">
                <img src="{{ asset('images/bg_1.jpg') }}" class="card-img-top produto-image" alt="...">
                <div class="card-body">
                    <h5 class="card-title border-secondary">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer border-secondary">
                    <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
                </div>
            </div>
            <div class="card text-center bg-light h-100">
                <img src="{{ asset('images/bg_2.jpg') }}" class="card-img-top produto-image" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
                </div>
            </div>
            <div class="card text-center bg-light h-100">
                <img src="{{ asset('images/bg_3.jpg') }}" class="card-img-top produto-image" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
                </div>
            </div>
            <div class="card text-center bg-light h-100">
                <img src="{{ asset('images/bg_4.jpg') }}" class="card-img-top produto-image" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
                </div>
            </div>
        </div>
    </div>
</section>

{{------ Clientes falam ------}}


<div class="container d-flex py-4">
    <div class="col-4 bg-color">
        <div class="d-flex flex-column justify-content-around">
            <h1 class="align-self-center bottonWhite titulo p-4">Clientes falam</h1>
            <p class="bottonWhite px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse velit similique
                iure nostrum perferendis odio ullam facilis ut consequatur laudantium totam incidunt, consectetur cumque
                nulla, tempora quasi obcaecati distinctio magni?Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt consequuntur culpa nulla reprehenderit.</p>
        </div>
    </div>
    <div class="col-8 mx-3">
        <div id="Carousel-clientes" class="justify-content-around owl-carousel owl-theme">
            <div class="card h-100 item" style="width: 21.5rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Edgar A.P.</p>
                </div>
            </div>
            <div class="card h-100 item" style="width: 21.5rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Pedro A.P.</p>
                </div>
            </div>
            <div class="card h-100 item" style="width: 21.5rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Bruno A.P.</p>
                </div>
            </div>
            <div class="card h-100 item" style="width: 21.5rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Luiz A.P.</p>
                </div>
            </div>
        </div>
    </div>
</div>



{{------ Modal ------}}

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">

    {{-- <div class=" bd-example-modal-lg"> --}}

    <div class="modal-dialog modal-lg">
        <div class="modal-content container">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRequestLabel">O que você procura?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link text-black active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Quero Comprar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Quero Vender</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                {{ $error }}<br>
                                @endforeach
                            </div>
                            @endif
                            <form method="post" action="{{route ('solicitacao.store')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group row pt-4">
                                        <label class="px-2" for="tipoVC">Tipo de Imovél:</label>
                                        <select class="form-control col-3" name="tipoVC" required>
                                            <option>Apartamento</option>
                                            <option>Casa</option>
                                            <option>Kitnet</option>
                                        </select>
                                    </div>
                
                                    <div class="modal-header my-2">
                                        <h5 class="modal-title">Onde?</h5>
                                    </div>
                
                                    <div class="form-group row">
                
                                        <label class="px-2" for="bairroEndereco">Bairro</label>
                                        <input type="text" class="form-control col-3" required name="bairroEnderecoVC">
                
                                        <label class="px-2" for="cidadeEndereco">Cidade</label>
                                        <input type="text" class="form-control col-3" required name="cidadeEnderecoVC">
                
                                    </div>
                
                
                                    <div class="modal-header my-2">
                                        <h5 class="modal-title">Como?</h5>
                                    </div>
                
                                    <div class="form-group row pt-4">
                                        <label class="px-2" for="qtdQuartos">Quartos:</label>
                                        <select class="form-control col-1" name="qtdQuartos" required>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                
                                    <div class="form-group row">
                
                                        <label class="px-2" for="ValorVC">Valor Minimo:</label>
                                        <input type="text" class="form-control col-3" required name="valorMin">

                                        <label class="px-2" for="ValorVC">Valor Maximo:</label>
                                        <input type="text" class="form-control col-3" required name="valorMax">
                
                                    </div>
                
                                    <div class="d-flex justify-content-center py-4">
                                        <button type="submit" class="btn btn-secondary px-5">Enviar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card-body">
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
                                <div class="d-flex justify-content-center py-4">
                                    <button type="submit" class="btn btn-secondary px-5">Cadastrar</button>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection


