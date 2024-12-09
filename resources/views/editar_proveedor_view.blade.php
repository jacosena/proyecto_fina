<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Proveedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="background-neutral">

    <!-- Formulario para Editar Proveedor -->
    <form action="{{ route('editar_proveedor', ['id' => $proveedor->id]) }}" method="post" class="form-wrapper padding-large rounded-border shadow-medium max-width-centered margin-auto margin-top-large">
        @csrf

        <!-- ID (campo oculto) -->
        <div class="margin-hidden">
            <input type="hidden" name="id" value="{{ $proveedor->id }}">
        </div>

        <!-- Nombre del Proveedor -->
        <div class="margin-bottom">
            <label for="Nombre" class="text-label-bold color-primary">Nombre del Proveedor</label>
            <input type="text" name="Nombre" value="{{ $proveedor->Nombre }}" placeholder="Nombre del proveedor" class="input-wide padding-small border-thin rounded-border focus-border-highlight">
        </div>

        <!-- Dirección del Proveedor -->
        <div class="margin-bottom">
            <label for="Direccion" class="text-label-bold color-primary">Dirección</label>
            <input type="text" name="Direccion" value="{{ $proveedor->Direccion }}" placeholder="Dirección" class="input-wide padding-small border-thin rounded-border focus-border-highlight">
        </div>

        <!-- Teléfono del Proveedor -->
        <div class="margin-bottom">
            <label for="Telefono" class="text-label-bold color-primary">Teléfono</label>
            <input type="tel" name="Telefono" value="{{ $proveedor->Telefono }}" placeholder="Teléfono" class="input-wide padding-small border-thin rounded-border focus-border-highlight">
        </div>

        <!-- Correo del Proveedor -->
        <div class="margin-bottom">
            <label for="Correo" class="text-label-bold color-primary">Correo Electrónico</label>
            <input type="email" name="Correo" value="{{ $proveedor->Correo }}" placeholder="Correo electrónico" class="input-wide padding-small border-thin rounded-border focus-border-highlight">
        </div>

        <!-- Contacto del Proveedor -->
        <div class="margin-bottom">
            <label for="Contacto" class="text-label-bold color-primary">Nombre del Contacto</label>
            <input type="tel" name="Contacto" value="{{ $proveedor->Contacto }}" placeholder="Nombre del contacto" class="input-wide padding-small border-thin rounded-border focus-border-highlight">
        </div>

        <!-- Descripción del Proveedor -->
        <div class="margin-bottom">
            <label for="Descripcion" class="text-label-bold color-primary">Descripción</label>
            <textarea name="Descripcion" cols="30" rows="10" placeholder="Descripción del proveedor" class="input-wide padding-medium border-thin rounded-border focus-border-highlight">{{ $proveedor->Descripcion }}</textarea>
        </div>

        <!-- Botón de Enviar -->
        <div class="flex-center">
            <input type="submit" value="Actualizar Proveedor" class="button-confirm text-white padding-medium rounded-border hover-bg-dark focus-border-highlight">
        </div>
    </form>

</body>
</html>
