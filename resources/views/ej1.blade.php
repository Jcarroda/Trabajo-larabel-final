<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ejercicio 1</title>
</head>
<body>
    <header>
        <h1>Listado Pictogramas</h1>
    </header>

    <main>

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
