<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        a {
            text-decoration: none;
            display: block;
            margin: 20px auto;
            width: 200px;
            text-align: center;
            padding: 10px;
            background-color: #ffcc00;
            color: #000;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        a:hover {
            background-color: #ff9900;
        }

        form {
            background: #fff;
            padding: 20px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 10px;
            max-width: 500px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            text-align: center;
            color: #555;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .text-center {
            text-align: center;
        }

        .text-danger {
            color: red;
            font-weight: bold;
        }

        .text-primary {
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Enlace para Crear Producto -->
    <a href="{{ route('home') }}">Crear Producto</a>

    <!-- Formulario de Crear Categoría -->
    <form action="{{ route('add_categoria') }}" method="post">
        @csrf
        <label for="nombre">Nombre de la Categoría</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de la categoría" required>

        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" placeholder="Descripción de la categoría"></textarea>

        <input type="submit" value="Crear Categoría">
    </form>

    <!-- Listado de Categorías -->
    <h2>Listado de Categorías</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->Nombre }}</td>
                    <td>{{ $categoria->Descripcion }}</td>
                    <td class="text-center">
                        <a href="{{ route('editar_categoria', $categoria->id) }}" class="text-primary">Editar</a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('eliminar_categoria', $categoria->id) }}" class="text-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>