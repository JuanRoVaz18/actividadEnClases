<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Eliminar Proyecto</h1>
    <form action="{{ route('proyecto.delete') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">Seleccionar ID</label>
            <select class="form-select" id="id" name="id">
                @foreach($proyectos as $proyecto)
                    <option value="{{ $proyecto->id }}">{{ $proyecto->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyecto->nombre ?? '' }}" readonly>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" readonly>{{ $proyecto->descripcion ?? '' }}</textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <textarea class="form-control" id="imagen" name="imagen" readonly>{{ $proyecto->imagen ?? '' }}</textarea>
        </div>
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
