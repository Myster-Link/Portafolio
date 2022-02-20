<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Estilos de Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap-css/bootstrap.min.css') }}">

    {{-- Estilos en General --}}
    <link rel="stylesheet" href="{{ asset('css/index/index_Plantilla.css') }}">
    @yield('css')

    {{-- GoogleFonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" href="images/favicon.png">

    <title>
        @yield('title', 'Christopher Fernández | Portafolio')
    </title>
</head>

<body>

    <header>

        <nav class="navbar navbar-dark nav_header menu-fixed">

            <div>
                <h1 id="titulo_nav">Myster_Link</h1>
            </div>

            <div id="div_nav">
                <a href="#scrollinicio">INICIO</a>
                <a href="#scrollportafolio">PORTAFOLIO</a>
                <a href="#scrollhabilidades">SKILLSET</a>
                <a href="#scrollsabermas">SABER MAS</a>
                <a href="#scrollcontacto">CONTACTO</a>
            </div>
        </nav>
    </header>


    <main>
        @yield('main')
    </main>

    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4 section_footer">
                <!-- Facebook -->
                <a href="https://www.facebook.com/profile.php?id=100013702146324" >
                    <img class="a_footer" src="{{ asset('images/footer/facebook-footer.svg') }}" alt="facebook-footer">
                </a>

                <!-- Instagram -->
                <a href="#">
                    <img class="a_footer" src="{{ asset('images/footer/instagram-footer.svg') }}" alt="instagram-footer">
                </a>

                <!-- Linkedin -->
                <a href="https://www.linkedin.com/in/christopher-felipe-fernández-barboza" >
                    <img class="a_footer" src="{{ asset('images/footer/linkedin-footer.svg') }}" alt="linkedin-footer">
                </a>
                <!-- Github -->
                <a href="https://github.com/Myster-Link">
                    <img class="a_footer" src="{{ asset('images/footer/github-footer.svg') }}" alt="github-footer">
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://mysterlink.com/">MysterLink.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    {{-- Scripts de Bootstrap --}}
    <script src="{{ asset('js/bootstrap-js/bootstrap.min.js') }}"></script>

</body>

</html>
