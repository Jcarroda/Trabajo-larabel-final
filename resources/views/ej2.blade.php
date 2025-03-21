<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <header>
        <h1> Añadir datos agenda </h1>
    </header>

    <main>
        <!-- Formulario que envía los datos -->
        <form action="{{ route('addAgenda') }}" method="POST">
            @csrf

            <!-- Campo de Fecha -->
            <div style="display: flex; gap: 1em; margin-bottom: 1em;">
                <label for="fecha"> Fecha: </label>
                <input type="date" id="fecha" name="fecha" required />
            </div>

            <!-- Campo de Hora -->
            <div style="display: flex; gap: 1em; margin-bottom: 1em;">
                <label for="hora"> Hora: </label>
                <input type="time" id="hora" name="hora" required />
            </div>

            <!-- Campo de ID Persona -->
            <div style="display: flex; gap: 1em; margin-bottom: 1em;">
                <label for="idPersona"> ID Persona: </label>
                <input type="number" id="idPersona" name="idPersona" min="0" value="0" required/>
            </div>

            <!-- Radio Buttons para Pictogramas -->
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; border: 1px solid black;">
                @foreach ($pictogramas as $pictograma)
                    <div style="text-align: center;">
                        <!-- Radio button -->
                        <input type="radio" id="pictograma_{{ $pictograma->imagen }}" name="pictograma_id" value="{{ $pictograma->idimagen }}" required>
                        <label for="pictograma_{{ $pictograma->imagen }}">
                            <!-- Imagen del pictograma -->
                            <img src="{{ asset($pictograma->imagen) }}" alt="{{ $pictograma->nombre }}" style="width: 100px; height: auto; display: block; margin: 0 auto;">
                            <p>{{ $pictograma->imagen }}</p>
                        </label>
                    </div>
                @endforeach
            </div>

            <!-- Botón para Enviar -->
            <button type="submit">Enviar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Javier Carro Da Silva</p>
    </footer>
</body>
</html>
