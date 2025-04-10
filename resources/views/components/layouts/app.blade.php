<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title ?? 'Lanchonete' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @livewireStyles
</head>

<body style="background-color: rgb(255, 240, 172)">
    <nav class="navbar border-bottom border-body" style="background-color: rgb(242, 192, 93)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lanchonete BomSabor</a>
            
        </div>
    </nav>

    <div class='container'>
        {{ $slot }}
    </div>

    <div>
        <br>
        <footer style="background-color:rgb(242, 192, 93)">
            <div class="text-center p-3">© 2025 Copyright:
                <a class="text-body" href="...">Lanchonete</a>
            </div>
        </footer>
    </div>


    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
