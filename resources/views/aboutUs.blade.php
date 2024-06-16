@extends('layouts.template')

@section('title','PescaMaestra')

@section('style')
<link rel="icon" href="images/fish-logo.png" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('css/aboutUsStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/bodyStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/headerStyle.css') }}">
<link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
@endSection

@section('content')
<header>
    <img src="images/fish.png" />
    <h1><a href="/">PescaMaestra</a></h1>
    <nav>
        <ul>
            <li><a href="/courses"><div class="hover"><b>CURSOS</b></div></a></li>
            <li><a href="/wiki"><div class="hover"><b>WIKI</b></div></a></li>
            <li><a href="/aboutUs"><div class="hover"><b>ACERCA DE NOSOTROS</b></div></a></li>
            <li><a href="/login"><button><b>INICIA SESION</b></button></a></li>
        </ul>
    </nav>
</header>

<div class="wrapper">
    <div class="content">
        <div class="aboutUs">
            <div class="grid">
                <div class="column1">
                    <h2>Nuestra misión</h2>
                    <p>
                        En PescaMaestra, nuestra misión es educar, inspirar y capacitar a pescadores de todos los niveles mediante la enseñanza de técnicas avanzadas y sostenibles de pesca. Nos comprometemos a promover una pesca responsable que respete y conserve los recursos acuáticos, asegurando que nuestras prácticas beneficien tanto al medio ambiente como a las comunidades locales.

                        Creemos en la importancia de crear una comunidad unida de pescadores apasionados, donde se comparten conocimientos, experiencias y valores. A través de nuestros cursos, buscamos no solo mejorar las habilidades técnicas de nuestros estudiantes, sino también fomentar una conexión profunda y respetuosa con la naturaleza.
                    </p>
                </div>
        
                <div class="column2">
                    <center><img src="images/Benalup.png"></img></center>
                </div>
            </div>
            <div class="grid">
                <div class="column1">
                    <center><img src="images/us.png"></img></center>
                </div>
        
                <div class="column2">
                        <h2>Los orígenes</h2>
                    
                    <p>
                       PescaMaestra nació en el encantador pueblo de Benalup-Casas Viejas, un lugar donde la tradición pesquera y el amor por la naturaleza se entrelazan en la vida cotidiana. Fundada por un grupo de apasionados pescadores locales, nuestra organización tiene sus raíces en la rica cultura y las prácticas ancestrales de pesca de esta región.

                       Desde nuestros humildes comienzos, nos hemos dedicado a preservar y compartir el conocimiento y las técnicas de pesca que han sido transmitidas de generación en generación. En Benalup-Casas Viejas, aprendimos a valorar la importancia de la sostenibilidad y el respeto por el medio ambiente, principios que forman la base de todos nuestros cursos.
                    </p>
                </div>
            </div>
            <div class="grid">
                <div class="column1">
                    <h2>Nuestros premios</h2>
                    <p>
                        En PescaMaestra, hemos sido honrados con varios premios que reflejan nuestro compromiso con la pesca sostenible y la educación de calidad. En 2022, recibimos el Premio Nacional de Innovación en la Pesca por nuestras metodologías innovadoras. Al año siguiente, la Fundación EcoPescadores nos otorgó el Reconocimiento a la Excelencia en Educación Ambiental. En 2021, la Asociación de Pescadores de Benalup-Casas Viejas nos concedió la Medalla de Honor de la Comunidad Pesquera. Además, en 2020, fuimos galardonados con el Premio a la Sustentabilidad y Conservación por la Sociedad Española de Pesca Responsable. Más recientemente, en 2023, la Asociación Internacional de Pesca Deportiva nos entregó el Galardón al Liderazgo en la Formación de Pescadores. Estos premios validan nuestra dedicación a la enseñanza de técnicas de pesca responsables y a la conservación del medio ambiente.                    </p>
                </div>
        
                <div class="column2">
                    <center><img src="images/awards.png"></img></center>
                </div>
            </div>
            <div class="grid">
                <div class="column1">
                    <center><img src="images/teams.png"></img></center>
                </div>
        
                <div class="column2">
                    <h2>El equipo</h2>
                    <p>
                        En PescaMaestra, contamos con un equipo de expertos apasionados y dedicados, comprometidos a brindar la mejor educación en pesca sostenible. Entre ellos, destaca Miguel Crespo, nuestro fundador y principal instructor. Con más de 20 años de experiencia en el arte de la pesca, Miguel ha dedicado su vida a la enseñanza y la conservación de los recursos acuáticos.

                        Miguel comenzó su carrera en Benalup-Casas Viejas, donde aprendió las técnicas tradicionales de pesca de su familia. Su profundo conocimiento y amor por la pesca lo llevaron a fundar PescaMaestra, con la visión de compartir sus habilidades y promover prácticas sostenibles.
                    </p>
                </div>
            </div>
        </div>    </div>
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
@endSection
