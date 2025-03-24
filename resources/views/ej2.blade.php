<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<style>
    input {
        width: 20rem;
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
</style>

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
    <h1> Añadir datos agenda </h1>
        <form action="{{ route('addAgenda') }}" method="POST">
            @csrf

            <div style="display: flex; gap: 1em; margin-bottom: 1em;">
                <label for="fecha"> Fecha: </label>
                <input style="margin-left:3rem;" type="date" id="fecha" name="fecha" required />
            </div>

            <div style="display: flex; gap: 1em; margin-bottom: 1em;">
                <label for="hora"> Hora: </label>
                <input style="margin-left:3.5rem;" type="time" id="hora" name="hora" required />
            </div>

            <div style="display: flex; gap: 1em; margin-bottom: 1em;">
                <label for="idPersona"> ID Persona: </label>
                <input style="margin-left:1rem;" type="number" id="idPersona" name="idPersona" min="0" value="0" required />
            </div>

            <div>
                <p>Selecciona una imagen</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; border: 1px solid black;">
                @foreach ($pictogramas as $pictograma)
                <div style="text-align: center;">
                    <input type="radio" id="pictograma_{{ $pictograma->imagen }}" name="pictograma_id" value="{{ $pictograma->idimagen }}" required>
                    <label for="pictograma_{{ $pictograma->imagen }}">
                        <img src="{{ asset($pictograma->imagen) }}" alt="{{ $pictograma->nombre }}" style="width: 100px; height: auto; display: block; margin: 0 auto;">
                        <p>{{ $pictograma->imagen }}</p>
                    </label>
                </div>
                @endforeach
            </div>

            <button type="submit" style="margin-top:1rem; margin-left:4rem; background-color: #337ab7; color: white; padding: 6px 10px; border-radius: 5px; text-decoration: none; display: inline-block; font-size: 12px;">Añadir entrega a agenda</button>
            <a href="./ejercicio1" style="color: #337ab7; text-decoration: none; font-size: 14px; margin-left: 10px;">‹ Volver al listado</a>

        </form>
    </main>

    <footer>
        <p>&copy; 2025 Javier Carro Da Silva</p>
    </footer>
</body>

</html>