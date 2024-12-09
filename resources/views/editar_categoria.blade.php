<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Categoría</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="background-light">

    <!-- Formulario para Editar Categoría -->
    <form action="{{ route('editar_categoria', ['id' => $categorias->id]) }}" method="post" class="form-container padding-extra border-rounded shadow-light max-width-large margin-auto margin-top">
        @csrf
        
        <!-- ID (solo lectura) -->
        <div class="margin-bottom">
            <label for="id" class="label-bold text-primary">ID de la Categoría</label>
            <input type="text" name="id" value="{{ $categorias->id }}" placeholder="{{ $categorias->id }}" disabled class="input-full padding-small border-light background-disabled">
        </div>

        <!-- Nombre de la Categoría -->
        <div class="margin-bottom">
            <label for="nombre" class="label-bold text-primary">Nuevo Nombre</label>
            <input type="text" name="nombre" placeholder="{{ $categorias->nombre }}" class="input-full padding-small border-light border-rounded focus-border-accent">
        </div>

        <!-- Descripción de la Categoría -->
        <div class="margin-bottom">
            <label for="descripcion" class="label-bold text-primary">Nueva Descripción</label>
            <textarea name="descripcion" cols="30" rows="5" placeholder="{{ $categorias->descripcion }}" class="input-full padding-small border-light border-rounded focus-border-accent"></textarea>
        </div>

        <!-- Botón de Enviar -->
        <div class="flex-center">
            <input type="submit" value="Editar Categoría" class="button-primary text-light padding-medium border-rounded hover-bg-dark focus-border-accent">
        </div>
    </form>

</body>
</html>
