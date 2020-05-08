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

{{------ Produtos ------}}

<section class="container py-4">
    <div class="d-flex flex-column">
        <h1 class="align-self-center">Produtos</h1>


    <div id="produtos-carousel" class="card-group owl-carousel">
        <div class="card text-center bg-light h-100">
            <img src="{{ asset('images/bg_1.jpg') }}" class="card-img-top produto-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
          </div>
        </div>
        <div class="card text-center bg-light h-100">
            <img src="{{ asset('images/bg_2.jpg') }}" class="card-img-top produto-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
          </div>
        </div>
        <div class="card text-center bg-light h-100">
            <img src="{{ asset('images/bg_3.jpg') }}" class="card-img-top produto-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <button class="btn btn-secondary btn-lg btn-block">Ver produto</button>
          </div>
        </div>
        <div class="card text-center bg-light h-100">
            <img src="{{ asset('images/bg_4.jpg') }}" class="card-img-top produto-image" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        <div id="Carousel-clientes" class="d-flex justify-content-around owl-carousel">
            <div class="card h-100" style="width: 22rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Edgar A.P.</p>
                </div>
            </div>
            <div class="card h-100" style="width: 22rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Edgar A.P.</p>
                </div>
            </div>
            <div class="card h-100" style="width: 22rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Edgar A.P.</p>
                </div>
            </div>
            <div class="card h-100" style="width: 22rem;">
                <img class="img-cliente align-self-center" src="{{ asset('images/person_3.jpg') }}" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <p class="card-text">Edgar A.P.</p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
