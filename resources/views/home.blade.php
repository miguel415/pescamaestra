@extends('layouts.template')

@section('title','PescaMaestra')

@section('style')
<link rel="icon" href="images/fish-logo.png" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/bodyStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/headerStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/homeStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
@endSection

@section('content')

<div class="wrapper">
    <div class="content">
        <header>
            <img src="images/fish.png" />
            <h1><a href="/">PescaMaestra</a></h1>
            <nav>
                <ul>
                    <li><a href="/categories"><div class="hover"><b>CURSOS</b></div></a></li>
                    <li><a href="/wiki"><div class="hover"><b>WIKI</b></div></a></li>
                    <li><a href="/aboutUs"><div class="hover"><b>ACERCA DE NOSOTROS</b></div></a></li>
                    @if (Auth::check())
                    <p><li><a href="/logout"><button><b>CERRAR SESIÓN</b></button></a></li></p>
                    @else
                    <p><li><a href="/login"><button><b>INICIA SESION</b></button></a></li></p>
                    @endif
                    
                </ul>
            </nav>
        </header>
        <div class="home">
            <div class="grid1">
                <h1>¿Quieres dominar el arte de la pesca?</h1>
                <h3>
                    Sumérgete en un viaje de aprendizaje
                    y descubrimiento, desde técnicas más
                    básicas hasta los secretos más profundos
                    de los expertos.
                </h3>
                <div class="buttons">
                    <button class="button-courses"><b>CURSOS</b></button>
                    <button class="button-official-courses"><b>CURSOS OFICIALES</b></button>
                </div>
            </div>
            <div class="grid2">
                <center><img id="slideshow" src="images/home1.png"></center>
            </div>
        </div>
    </div>
    <footer>
        <p class="phone">
            <img src="images/phone.png">
        </p>
        <p><img src="images/facebook.png" alt="Facebook" /></p>
        <p><img src="images/discord.png" alt="Discord" /></p>
        <p id="contactanos"><h3>CONTÁCTANOS</h3></p>
        <p><img src="images/twitter-alt-circle.png" alt="Twitter" /></p>
        <p><img src="images/instagram.png" alt="Instagram" /></p>
        <p class="email">
            <img src="images/email.png">
        </p>
    </footer>
</div>

<script>
    // JavaScript para cambiar la imagen cada 5 segundos
    var images = ['images/home1.png', 'images/home2.png', 'images/home3.png']; // Lista de imágenes
    var currentIndex = 0; // Índice de la imagen actual

    // Función para cambiar la imagen
    function changeImage() {
        currentIndex = (currentIndex + 1) % images.length; // Incrementa el índice circularmente
        document.getElementById('slideshow').src = images[currentIndex]; // Cambia la imagen
    }

    // Ejecutar la función cada 5 segundos
    setInterval(changeImage, 5000);
</script>

@endSection
