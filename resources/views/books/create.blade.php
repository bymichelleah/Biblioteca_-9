<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Libro</title>
  @vite('resources/css/create.css')
</head>
<body>
  <h1>Agregar Nuevo Libro</h1>

  <form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label for="title">Título:</label>
    <input type="text" id="title" name="title" required>

    <label for="author">Autor:</label>
    <input type="text" id="author" name="author" required>

    <label for="description">Descripción:</label>
    <textarea id="description" name="description"></textarea>

    <label for="year">Año:</label>
    <input type="number" id="year" name="year">

    <label for="genre">Género:</label>
    <input type="text" id="genre" name="genre">

    <button type="submit">Guardar</button>
  </form>
</body>
</html>