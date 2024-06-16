<!-- En tu vista de registro de Laravel -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('Assets/css/styleLogin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/registerStyle.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="grid-container">
        <div class="img-container">
            <img src="{{ asset('images/pescadores.jpg') }}" alt="Imagen descriptiva" class="img-fluid">
        </div>
        <div class="form-container">
            <div class="form-content">
                <div class="text-center pb-3">
                    <h3>PescaMaestra</h3>
                </div>
                <form id="registrationForm" action="{{ route('validar-registro') }}" method="post" onsubmit="return validatePasswords()">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="userInput" name="name" required placeholder="Nombre*" autocomplete="disabled">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="emailInput" required placeholder="Email*" autocomplete="disabled">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="passwordInput" name="password" required placeholder="Contraseña*">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="confirmPasswordInput" name="confirmPassword" required placeholder="Confirmar Contraseña*">
                    </div>
                    <div class="text-danger mb-3" id="error-message" style="display: none;">Las contraseñas no coinciden.</div>
                    <div class="d-grid gap-2 pt-3">
                        <button type="submit" class="btn btn-custom2">Crear cuenta</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        function validatePasswords() {
            const password = document.getElementById('passwordInput').value;
            const confirmPassword = document.getElementById('confirmPasswordInput').value;
            const errorMessage = document.getElementById('error-message');

            if (password !== confirmPassword) {
                errorMessage.style.display = 'block';
                return false; // Prevent form submission
            } else {
                errorMessage.style.display = 'none';
                return true;
            }
        }
    </script>
</body>

</html>