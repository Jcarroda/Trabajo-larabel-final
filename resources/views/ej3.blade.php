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

    body {
        margin: 0;
    }

    img{
        width: 200px;
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
    <h1>Buscar en la Agenda</h1>

    <form method="GET" action="{{ route('mostrar.agenda') }}">
        <label for="persona">ID Persona:</label>
        <input type="number" style="margin-left:20px;" name="persona" id="persona" required>
        <br>
        <label for="fecha">Fecha:</label>
        <input type="date" style="margin-left:50px;" name="fecha" id="fecha" required>
        <br>
        <button type="submit" style="margin-top:1rem; margin-left:4rem; background-color: #337ab7; color: white; padding: 6px 10px; border-radius: 5px; text-decoration: none; display: inline-block; font-size: 12px;">mostrarAgenda</button>
        <a href="./ejercicio1" style="color: #337ab7; text-decoration: none; font-size: 14px; margin-left: 10px;">‹ Volver al listado</a>
    </form>
    </main>

    <footer>
        <p>&copy; 2025 Javier Carro Da Silva</p>
    </footer>
</body>

</html>
