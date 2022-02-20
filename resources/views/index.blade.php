@extends('layouts.index_Plantilla')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">
@endsection

@section('main')
    <div class="div_titulo" id="scrollinicio">

        @if (Session::has('mensaje'))
            <p class="mensaje_recibimos">{{ session('mensaje') }}</p>
        @endif

        <img src="{{ asset('images/icono_inicio.png') }}" alt="" class="img_titulo">
        <h2 class="titulo">Christopher Fernández Barboza</h2>
        <hr>
        <p class="p_titulo">Desallorador web</p>

    </div>

    <div class="div_main" id="scrollportafolio">
        <h2>PORTAFOLIO</h2>

        <div class="div_portafolio">

            <div class="card div_card_portafolio" style="width: 18rem;">
                <img src="{{ asset('images/Img_sistema_inventario.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistema de Inventario</h5>
                    <p class="card-text">
                        Un sistema con facturacion, inventario y registro de clientes auto gestionable.
                    </p>
                    <a href="http://sistema_inventario.test/" class="btn btn-primary">Vamos a ver</a>
                </div>
            </div>

            <div class="card div_card_portafolio" style="width: 18rem;">
                <img src="{{ asset('images/Img_sistema_inventario.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistema de Inventario</h5>
                    <p class="card-text">
                        Un sistema con facturacion, inventario y registro de clientes auto gestionable.
                    </p>
                    <a href="http://sistema_inventario.test/" class="btn btn-primary">Vamos a ver</a>
                </div>
            </div>

            <div class="card div_card_portafolio" style="width: 18rem;">
                <img src="{{ asset('images/Img_sistema_inventario.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistema de Inventario</h5>
                    <p class="card-text">
                        Un sistema con facturacion, inventario y registro de clientes auto gestionable.
                    </p>
                    <a href="http://sistema_inventario.test/" class="btn btn-primary">Vamos a ver</a>
                </div>
            </div>

            <div class="card div_card_portafolio" style="width: 18rem;">
                <img src="{{ asset('images/Img_sistema_inventario.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistema de Inventario</h5>
                    <p class="card-text">
                        Un sistema con facturacion, inventario y registro de clientes auto gestionable.
                    </p>
                    <a href="http://sistema_inventario.test/" class="btn btn-primary">Vamos a ver</a>
                </div>
            </div>

        </div>

    </div>

    <div class="div_main2" id="scrollhabilidades">
        <h2>SKILLSET</h2>

        <img class="img_habilidades" title="HTML 5" src="{{ asset('images/html.svg') }}" alt="Logo de Html 5">
        <img class="img_habilidades" title="CSS 3" src="{{ asset('images/css.svg') }}" alt="Logo de css 3">
        <img class="img_habilidades" title="JAVASCRIPT" src="{{ asset('images/js.svg') }}" alt="Logo de js">
        <img class="img_habilidades" title="BOOTSTRAP" src="{{ asset('images/bootstrap.svg') }}" alt="Logo de bootstrap">
        <img class="img_habilidades" title="PHP 8" src="{{ asset('images/php.svg') }}" alt="Logo de Php 8">
        <img class="img_habilidades" title="LARAVEL 8" src="{{ asset('images/laravel.svg') }}" alt="Logo de Laravel 8">
        <img class="img_habilidades" title="MYSQL" src="{{ asset('images/mysql.svg') }}" alt="Logo de MySql">
        <img class="img_habilidades" title="GIT" src="{{ asset('images/git.svg') }}" alt="Logo de Git">
        <img class="img_habilidades" title="LARAGON" src="{{ asset('images/laragon.svg') }}" alt="Logo de Laragon">
    </div>

    <div class="div_main" id="scrollsabermas">
        <h2>MAS INFORMACIÓN</h2>
        <div class="div_sabermas">
            <a href="https://www.facebook.com/profile.php?id=100013702146324"><img
                    src="{{ asset('images/facebook.svg') }}" alt="Link Facebook" title="Link Facebook"></a>
            <a href=""><img src="{{ asset('images/instagram.svg') }}" alt="Link Instagram" title="Link Instagram"></a>
            <a href="https://www.linkedin.com/in/christopher-felipe-fernández-barboza"><img
                    src="{{ asset('images/linkedin.svg') }}" alt="Link Linkedin" title="Link Linkedin"></a>
            <a href="https://github.com/Myster-Link"><img src="{{ asset('images/github.svg') }}" alt="Link GitHub" title="Link GitHub"></a>
        </div>
    </div>

    <div class="div_main2" id="scrollcontacto">
        <h2>CONTACTAR</h2>

        <form action="{{ route('contacto') }}" method="post">
            @csrf

            <div id="input-contacto">

                <label for="usuario">Nombre</label>
                <br>

                <input type="text" name="nombre_contacto" placeholder="Nombre..." value="{{ old('nombre_contacto') }}">
                <br>
                <p class="mensage_error">@error('nombre_contacto')
                        {{ '*' . $message }}
                    @enderror</p>

                <label for="password">Asunto</label>
                <br>

                <input type="text" name="asunto_contacto" placeholder="Asunto..." value="{{ old('asunto_contacto') }}">
                <br>
                <p class="mensage_error">@error('asunto_contacto')
                        {{ '*' . $message }}
                    @enderror</p>

                <label for="password">Correo</label>
                <br>

                <input type="email" name="correo_contacto" placeholder="Correo..." value="{{ old('correo_contacto') }}">
                <br>
                <p class="mensage_error">@error('correo_contacto')
                        {{ '*' . $message }}
                    @enderror</p>


                <label for="password">Mensaje</label>
                <br>

                <textarea name="mensaje_contacto" id="" cols="30" rows="5"
                    placeholder="Mensaje...">{{ old('mensaje_contacto') }}</textarea>
                <br>
                <p class="mensage_error">@error('mensaje_contacto')
                        {{ '*' . $message }}
                    @enderror</p>

                <input type="submit" class="btn btn-primary btn_contacto" value="Enviar">

            </div>

        </form>

    </div>



    </div>
@endsection
