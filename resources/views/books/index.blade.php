
@vite('resources/css/index.css')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biblioteca</title>
</head>
<body>

  <h1>Lista de Libros</h1>

  <div class="btn-agregar">
    <a href="{{ route('books.create') }}">Agregar Nuevo Libro</a>
  </div>

  <ul>
    @foreach ($books as $book)
      <li>
        <span><strong>{{ $book->title }}</strong> por {{ $book->author }} ({{ $book->year }})</span>
        <span>
          <a href="{{ route('books.edit', $book->id) }}" class="btn-editar">Editar</a>
          <form action="{{ route('books.destroy', $book->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-eliminar">Eliminar</button>
          </form>
        </span>
      </li>
    @endforeach
  </ul>

</body>
</html>
