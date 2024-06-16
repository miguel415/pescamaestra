<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PescaMaestra</title>
    <link rel="icon" href="images/fish-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/headerStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homeStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/wikiStyle.css') }}">
   
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">

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

            <div class="pdf-container">
                <div class="pdf-background"></div>
                <embed src="pdfs/@yield('pdf')" type="application/pdf" />
                <div class="download-link">
                    <a href="pdfs/@yield('pdf')" download>
                        <img src="images/download-icon.png" alt="Descargar documento">
                    </a>
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
            <div class="wiki"></div>
        </div>
    </div>

</body>

</html>
