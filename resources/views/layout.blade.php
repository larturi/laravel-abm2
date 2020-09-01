<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Sitio</title>

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

    <div id="app" class="d-flex flex-column h-screen  justify-content-between">

        <header>
            @include('partials.navbar')
        </header>

        <main class="py-4">
            @yield('contenido')
        </main>

        <footer class="bg-white text-black-50 text-center py-3 shadow">
            My sitio - Copyrigth {{date('Y')}}
        </footer>


    </div>

</body>

</html>
