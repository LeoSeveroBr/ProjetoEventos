<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- Fonts Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>



    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/airplane.svg" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="navbar">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar">
                        <a href="/" class="nav-link">Criar eventos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar">
                        <a href="/" class="nav-link">Cadastrar </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="navbar">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>
    @yield('content')
    <footer>
        <hr>
        <h4>Eventos Leo @copy; 2023</h4>
        <hr>
    </footer>

</body>

</html>
