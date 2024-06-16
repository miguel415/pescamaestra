<!-- resources/views/categories.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorías y Cursos</title>
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
                <img src="images/fish.png" />
                <h1><a href="/">PescaMaestra</a></h1>
                <nav>
                    <ul>
                        <li><a href="/categories">
                                <div class="hover"><b>CURSOS</b></div>
                            </a></li>
                        <li><a href="/wiki">
                                <div class="hover"><b>WIKI</b></div>
                            </a></li>
                        <li><a href="/aboutUs">
                                <div class="hover"><b>ACERCA DE NOSOTROS</b></div>
                            </a></li>
                        @if (Auth::check())
                        <li><a href="/logout"><button><b>CERRAR SESIÓN</b></button></a></li>
                        @else
                        <li><a href="/login"><button><b>INICIA SESION</b></button></a></li>
                        @endif
                    </ul>
                </nav>
            </header>

            <h2>Listado de Categorías</h2>
            <ul>
                @foreach ($categories as $category)
                <li>
                    <a href="{{ route('categories.show', ['category_id' => $category->id]) }}">
                        {{ $category->name }}
                    </a>
                </li>
                @endforeach
            </ul>


            <!-- resources/views/categories.blade.php -->

            <ul>
                @foreach ($courses as $course)
                <li>
                    <a href="{{ route('courses.show', ['idcurso' => $course->idcurso]) }}">
                        <span class="course-title">{{ $course->title }}</span><br>
                        <span class="course-category">Categoría: {{ $course->category->name }}</span><br>
                        <p class="course-description">{{ $course->description }}</p>
                    </a>
                </li>
                @endforeach
            </ul>


            <footer>
                <p class="phone">
                    <img src="images/phone.png">
                </p>
                <p><img src="images/facebook.png" alt="Facebook" /></p>
                <p><img src="images/discord.png" alt="Discord" /></p>
                <p id="contactanos">
                    <h3>CONTÁCTANOS</h3>
                </p>
                <p><img src="images/twitter-alt-circle.png" alt="Twitter" /></p>
                <p><img src="images/instagram.png" alt="Instagram" /></p>
                <p class="email">
                    <img src="images/email.png">
                </p>
            </footer>
        </div>
    </div>
</body>

</html>
