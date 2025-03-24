<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ejercicio 1</title>
    <style>
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
        <h1>Listado Pictogramas</h1>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
            @foreach ($pictogramas as $pictograma)
            <div>
                <img src="{{ asset($pictograma->imagen) }}" alt="{{ $pictograma->nombre }}" style="width: 200px; height: 200px; display: block; margin: 0 auto;">
                <p style="text-align: center;">{{ $pictograma->imagen }}</p>
            </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Javier Carro Da Silva</p>
    </footer>
</body>

</html>