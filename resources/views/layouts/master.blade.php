<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>

        <div>
            <a href='http://localhost:3000/user'>Usuarios</a>
            <a href='http://localhost:3000/movie'>Películas</a>
            <a href='http://localhost:3000/genre'>Géneros</a>
            <a href='http://localhost:3000/person'>Gente</a>
        </div>

        <div class="header">
            <h1>@yield('header')</h1>
        </div>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
