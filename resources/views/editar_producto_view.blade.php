<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="background-lightblue">
    <div class="container-width padding-large margin-auto margin-top bg-light border-rounded box-shadow">
        <h1 class="heading-large font-weight-bold margin-bottom text-center text-dark">Editar Producto</h1>
        <form action="{{ route('update_producto', ['id' => $productos->id]) }}" method="POST" class="form-spacing">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="Nombre" class="label-small font-bold text-dark">Nombre del Producto</label>
                <input 
                    type="text" 
                    id="Nombre" 
                    name="Nombre" 
                    value="{{ $productos->Nombre }}" 
                    required 
                    class="input-full padding-small border-thin border-rounded input-shadow focus-border-blue"
                >
            </div>

            <!-- Precio Unitario -->
            <div>
                <label for="precio_unitario" class="label-small font-bold text-dark">Precio Unitario</label>
                <input 
                    type="number" 
                    id="precio_unitario" 
                    name="precio_unitario" 
                    value="{{ $productos->precio_unitario }}" 
                    required 
                    class="input-full padding-small border-thin border-rounded input-shadow focus-border-blue"
                >
            </div>

            <!-- Stock -->
            <div>
                <label for="stock" class="label-small font-bold text-dark">Stock</label>
                <input 
                    type="number" 
                    id="stock" 
                    name="stock" 
                    value="{{ $productos->stock }}" 
                    required 
                    class="input-full padding-small border-thin border-rounded input-shadow focus-border-blue"
                >
            </div>

            <!-- Botón de envío -->
            <div class="flex-center">
                <button 
                    type="submit" 
                    class="button-green text-white padding-medium border-rounded button-shadow hover-bg-green focus-border-blue focus-offset"
                >
                    Actualizar Producto
                </button>
            </div>
        </form>
    </div>
</body>
</html>
