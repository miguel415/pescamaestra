@extends('layouts.template')

@section('title','PescaMaestra')

@section('style')
<link rel="icon" href="images/fish-logo.png" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/bodyStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/headerStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/homeWikiStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
@endsection

@section('content')
<div class="wrapper">
    <div class="content">
        <header>
            <img src="images/fish.png" />
            <h1><a href="/">PescaMaestra</a></h1>
            <nav>
                <ul>
                    <li><a href="/courses">
                            <div class="hover"><b>CURSOS</b></div>
                        </a></li>
                    <li><a href="/wiki">
                            <div class="hover"><b>WIKI</b></div>
                        </a></li>
                    <li><a href="/aboutUs">
                            <div class="hover"><b>ACERCA DE NOSOTROS</b></div>
                        </a></li>
                    <li><a href="/login"><button><b>INICIA SESION</b></button></a></li>
                </ul>
            </nav>
        </header>
        <div class="home">
            <div class="home-header">
                <h1>Explora nuestra wiki de Pesca</h1>
                <img src="images/wiki.png" alt="">
            </div>
            <div class="flex-container">
                <a href="/techniques" class="flex-item">
                    <img src="images/techniques.png" alt="Item 1">
                    <h3>Técnicas</h3>
                </a>
                <a href="/equipment" class="flex-item">
                    <img src="images/equipment.png" alt="Item 2">
                    <h3>Equipamiento</h3>
                </a>
                <a href="/conservation" class="flex-item">
                    <img src="images/conservation.png" alt="Item 3">
                    <h3>Conservación</h3>
                </a>
                <a href="/experiences" class="flex-item">
                    <img src="images/experiences.png" alt="Item 4">
                    <h3>Experiencias</h3>
                </a>
                <a href="/history" class="flex-item">
                    <img src="images/history.png" alt="Item 5">
                    <h3>Historia</h3>
                </a>
                <a href="/tournaments" class="flex-item">
                    <img src="images/tournaments.png" alt="Item 6">
                    <h3>Torneos</h3>
                </a>
                <a href="/trends" class="flex-item">
                    <img src="images/trends.png" alt="Item 7">
                    <h3>Tendencias</h3>
                </a>
                <a href="/regulations" class="flex-item">
                    <img src="images/regulations.png" alt="Item 8">
                    <h3>Reglamentos</h3>
                </a>
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
@endsection
