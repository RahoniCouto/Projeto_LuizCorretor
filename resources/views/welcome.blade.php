@extends('layouts.master')

@section('title', 'Home')

@section('content')

<div class="Ecorretor">
    <img class="logo" src="{{ asset('/images/Logo.png') }}" alt="">
</div>

<div class="home-slider owl-carousel">
    <div class="menu-slide d-flex align-items-end justify-content-center" style="background-image: url(/images/bg_1.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#1 Bairro 1</a></h3>
    </div>
    <div class="menu-slide d-flex align-items-end justify-content-center" style="background-image: url(/images/bg_2.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#2 Bairro 2</a></h3>
    </div>
    <div class="menu-slide d-flex align-items-end justify-content-center" style="background-image: url(/images/bg_3.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#3 Bairro 3</a></h3>
    </div>
    <div class="menu-slide d-flex align-items-end justify-content-center" style="background-image: url(/images/bg_4.jpg)">
        <h3 class="p-3"><a class="bottonWhite" href="">#1 Bairro 4</a></h3>
    </div>
</div>

<div class="container">
    <div class="row d-flex">
        <div class="col-md-7 d-flex justify-content-center align-items-center">
            <div class="d-flex flex-column align-self-center">
                <h2 class="p-4">Como tudo começou</h2>
                <p class="px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse velit similique iure nostrum 
                    perferendis odio ullam facilis ut consequatur laudantium totam incidunt, consectetur cumque nulla, 
                    tempora quasi obcaecati distinctio magni?Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Nesciunt consequuntur culpa nulla reprehenderit, id quam ab nam corporis fugiat quis illo voluptate 
                    quibusdam facilis neque eligendi unde deserunt temporibus quia.</p>
            </div>
        </div>
        <div class="col-md-5 d-flex justify-content-center align-items-center corretor"
            style="background-image: url(images/person_3.jpg);">
            <div>Edmundo Corretor</div>
        </div>
    </div>
</div>



@endsection
