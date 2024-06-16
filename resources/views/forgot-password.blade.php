<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PescaMaestra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/change-passStyle.css') }}">
    <style>
       
    </style>
</head>

<body>
    <main class="container-sm align-center p-5">
        <div class="login-container">
            <div class="titulo">
                <img src="{{ asset('images/fish.png') }}" alt="Logo">
                <a href="/">
                    <h1><b>PescaMaestra</b></h1>
                </a>
            </div>
            @if (session('status'))
                <p>{{ session('status') }}</p>
            @endif
            <div class="bg-custom">
                <form class="p-5" action="{{ route('password.email') }}" method="post">
                    @csrf
                    <h4 style="text-align: center;">¿Olvidaste tu contraseña?</h4>
                    <div class="form-group mb-3" style="text-align: center;">
                        <input type="email" class="form-control" name="email" id="emailInput" placeholder="E-mail*" required>
                    </div>
                    <div class="d-grid gap-2 pb-3" style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-custom">Restablecer contraseña</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
