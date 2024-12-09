<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="background-muted">

    <!-- Enlaces Crear Proveedor y Crear Categoría -->
    <article class="layout-row space-around margin-large">
        <a href="{{ route('proveedor') }}" class="box-link center-text bg-accent hover-bg-dark text-light font-bold padding-medium border-rounded shadow-normal transition-quick">
            <h2 class="text-large">Crear Proveedor</h2>
        </a>

        <a href="{{ route('categoria') }}" class="box-link center-text bg-success hover-bg-darker text-light font-bold padding-medium border-rounded shadow-normal transition-quick">
            <h2 class="text-large">Crear Categoría</h2>
        </a>
    </article>
    
    <!-- Formulario de Crear Producto -->
    <form action="{{ route('add_product') }}" method="post" class="form-container padding-large border-rounded shadow-large max-width-medium center-content margin-top-large">
        @csrf
        <div class="spacer-medium">
            <label for="Nombre" class="text-label-bold color-muted">Nombre del Producto</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Ingresa el nombre del producto" required class="input-full padding-regular border-light border-rounded focus-highlight">
        </div>

        <div class="spacer-medium">
            <label for="precio_unitario" class="text-label-bold color-muted">Precio</label>
            <input type="number" name="precio_unitario" id="precio_unitario" placeholder="Ingresa el precio del producto" required class="input-full padding-regular border-light border-rounded focus-highlight">
        </div>

        <div class="spacer-medium">
            <label for="stock" class="text-label-bold color-muted">Stock</label>
            <input type="number" name="stock" id="stock" placeholder="Ingresa la cantidad en stock" required class="input-full padding-regular border-light border-rounded focus-highlight">
        </div>

        <div class="spacer-medium">
            <label for="id_categoria" class="text-label-bold color-muted">Seleccionar Categoría</label>
            <select name="id_categoria" id="id_categoria" class="input-full padding-regular border-light border-rounded focus-highlight">
                <option value="" disabled selected>Seleccionar Categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="spacer-medium">
            <label for="id_proveedors" class="text-label-bold color-muted">Seleccionar Proveedor</label>
            <select name="id_proveedors" id="id_proveedors" class="input-full padding-regular border-light border-rounded focus-highlight">
                <option value="" disabled selected>Seleccionar Proveedor</option>
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="center-content">
            <input type="submit" value="Añadir Producto" class="button-primary text-light padding-medium border-rounded hover-highlight focus-outline">
        </div>
    </form>

    <!-- Tabla de Productos -->
    <div class="scrollable margin-large">
        <table class="table-full bg-light border-rounded shadow-large">
            <thead>
                <tr class="bg-accent text-light">
                    <th class="padding-small text-left">ID</th>
                    <th class="padding-small text-left">Nombre del Producto</th>
                    <th class="padding-small text-left">Precio</th>
                    <th class="padding-small text-left">Stock</th>
                    <th class="padding-small text-left">Fecha de Creación</th>
                    <th class="padding-small text-center" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="border-light hover-highlight">
                        <td class="padding-small">{{ $producto->id }}</td>
                        <td class="padding-small">{{ $producto->Nombre }}</td>
                        <td class="padding-small">{{ $producto->precio_unitario }}</td>
                        <td class="padding-small">{{ $producto->stock }}</td>
                        <td class="padding-small">{{ $producto->created_at->format('Y-m-d H:i:s') }}</td>
                        <td class="padding-small text-center">
                            <a href="{{ route('editar_producto_view', $producto->id) }}" class="text-link-accent hover-link-dark">Editar</a>
                        </td>
                        <td class="padding-small text-center">
                            <a href="{{ route('eliminar_producto', $producto->id) }}" class="text-link-danger hover-link-darker">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
