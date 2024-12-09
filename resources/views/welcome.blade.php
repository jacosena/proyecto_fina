<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="gradient-background full-screen flex-container align-center justify-center">
    <div class="centered-box background-light padding-large rounded-border shadow-box">
        <h1 class="title-large font-heavy text-dark margin-bottom-medium">¡Bienvenidos!</h1>
        <p class="text-medium text-muted margin-bottom-large">Explora nuestra plataforma .</p>
        <div class="button-group">
            <a href="{{route('register')}}" class="button-primary padding-medium rounded-border shadow-hover">
                Registro
            </a>
            <a href="{{route('login')}}" class="button-success padding-medium rounded-border shadow-hover">
                Login
            </a>
        </div>
    </div>
</body>
</html>
