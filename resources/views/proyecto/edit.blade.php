
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Pagina Update</h1>
    <form action="{{ route('proyecto.update', $proyecto->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Ingrese un ID único" value="{{ $proyecto->id ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Juan Roman Gonzalez" value="{{ $proyecto->nombre ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="{{ $proyecto->descripcion ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="text" class="form-control" id="imagen" name="imagen" placeholder=".png" value="{{ $proyecto->imagen ?? '' }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
    <!-- Formulario para eliminar clave -->
    <form action="{{ route('proyecto.delete', $proyecto->id) }}" method="post" id="formEliminar">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-danger mt-3" id="btnEliminar">Eliminar Clave</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- Script para manejar la eliminación de la clave -->
<script>
    document.getElementById("btnEliminar").addEventListener("click", function() {
        if(confirm("¿Estás seguro de que deseas eliminar esta clave?")) {
            document.getElementById("formEliminar").submit();
        }
    });
</script>
</body>
</html>
