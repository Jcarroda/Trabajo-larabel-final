<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Agenda</title>
    <style>
        input {
            width: 20rem;
            margin: 10px;
        }

        img {
            width: 200px;
        }

        body {
            margin: 0;
        }

        main {
            padding: 0 2rem 2rem 2rem;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ccc;
            margin: 0;
            width: 100%;
            position: sticky;
            top: 0;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-as {
            display: flex;
            gap: 10px;
        }

        .nav-a {
            padding: 5px 10px;
            background-color: #ddd;
            border: none;
            border-radius: 3px;
            margin-right: 2rem;
            text-decoration: none;
            color: black;
        }

        .nav-a.primary {
            background-color: #ccc;
        }

        .resultados {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .agenda-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <span class="icon">📅</span> AGENDA TEA
            </div>
            <div class="navbar-as">
                <a class="nav-a" href="./ejercicio1">
                    <span class="icon">📋</span> Catálogo pictogramas
                </a>
                <a class="nav-a primary" href="./ejercicio2">
                    <span class="icon">+</span> Nueva entrada en agenda
                </a>
                <a class="nav-a" href="./ejercicio3">
                    <span class="icon">👁️</span> Mostrar agenda
                </a>
            </div>
        </nav>
    </header>
    <main>

        @if(isset($agenda) && count($agenda) > 0)
        <h2>Agenda del día:</h2>
        <div class="resultados">
            @foreach($agenda as $item)
            <div class="agenda-item">
                <img src="{{ asset($item->imagen) }}" alt="Pictograma">
                <p> {{ $item->imagen }}</p>
            </div>
            @endforeach
            <style>

            </style>
        </div>
        @elseif(request()->has('persona') && request()->has('fecha'))
        <p>No se encontraron resultados para los datos ingresados.</p>
        @endif
    </main>
    <footer>
        <p>&copy; 2025 Javier Carro Da Silva</p>
    </footer>
</body>

</html>