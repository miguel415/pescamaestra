<!-- resources/views/course.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $course->title }}</title>
    <link rel="icon" href="images/fish-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bodyStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/headerStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <header>
                <img src="/images/fish.png" />
                <h1><a href="/">PescaMaestra</a></h1>
                <nav>
                    <ul>
                        <li><a href="/categories"><div class="hover"><b>CURSOS</b></div></a></li>
                        <li><a href="/wiki"><div class="hover"><b>WIKI</b></div></a></li>
                        <li><a href="/aboutUs"><div class="hover"><b>ACERCA DE NOSOTROS</b></div></a></li>
                        @if (Auth::check())
                        <li><a href="/logout"><button><b>CERRAR SESIÓN</b></button></a></li>
                        @else
                        <li><a href="/login"><button><b>INICIA SESION</b></button></a></li>
                        @endif
                    </ul>
                </nav>
            </header>

                <h1>{{ $course->title }}</h1>
                <p><strong>Categoría:</strong> {{ $course->category->name }}</p>
                <p><strong>Profesor:</strong> {{ $course->teachers->name }}</p>
                <p>{{ $course->description }}</p>
                
            <footer>
                <p class="phone">
                    <img src="/images/phone.png">
                </p>
                <p><img src="/images/facebook.png" alt="Facebook" /></p>
                <p><img src="/images/discord.png" alt="Discord" /></p>
                <p id="contactanos"><h3>CONTÁCTANOS</h3></p>
                <p><img src="/images/twitter-alt-circle.png" alt="Twitter" /></p>
                <p><img src="/images/instagram.png" alt="Instagram" /></p>
                <p class="email">
                    <img src="/images/email.png">
                </p>
            </footer>
        </div>
    </div>

    <script>
        // JavaScript para cambiar la imagen cada 5 segundos
        var images = ['/images/home1.png', '/images/home2.png', '/images/home3.png']; // Lista de imágenes
        var currentIndex = 0; // Índice de la imagen actual

        // Función para cambiar la imagen
        function changeImage() {
            currentIndex = (currentIndex + 1) % images.length; // Incrementa el índice circularmente
            document.getElementById('slideshow').src = images[currentIndex]; // Cambia la imagen
        }

        // Ejecutar la función cada 5 segundos
        setInterval(changeImage, 5000);
    </script>
</body>
</html>
