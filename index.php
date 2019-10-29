
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>SEMINFO - ItatechJr</title>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Link do css proprio-->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
 

</head>

<body>

    <nav id="cabecalho " class="navbar navbar-expand-lg bg-gradient">
        <a id="logo" class="nav justify-content-start">
            <span>Itatech <span id="jr">JR</span></span>
        </a>
        <div  class="navbar-toggler" onclick="transformIcon()" data-toggle="collapse" data-target="#barra-navegacao" aria-controls="barra-navegacao" aria-expanded="false" aria-label="Alterna navegação">
              <span id="btn-menu">
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
                <i class="icon-bar"></i>
              </span>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="barra-navegacao">
            <ul class="nav navbar-nav">
                <li >
                    <a  href="#">Apoio</a>
                </li>
                <li >
                    <a href="#">Paletras</a>
                </li>
                <li >
                    <a  href="#">Eventos</a>
                </li>
            </ul>
        </div>

    </nav>
    <main id="bg-black">
        <div class="container-fluid">
            <div class="row">
                <div id="painel-entrada">
                    <div class="flex-column">
                        <span id="seminfo">SEMINFO 2019</span>
                        <span id="slogan">Nos dias 11, 12 e 13 de Dezembro no Campus da UFS de Itabaiana</span>    
                    </div>
                    <div id="cronometro" class="flex-row">
                        <div class="flex-column">
                            <span class="formato" id="dias"> </span>
                            <span class="info">Dias</span>
                        </div>
                        <div class="flex-column">
                            <span class="formato" id="horas"> </span>
                            <span class="info">Horas</span>
                        </div>
                        <span class="formato-pontos">:</span>
                        <div class="flex-column">
                            <span class="formato" id="min"></span>
                            <span class="info">Minutos</span>
                        </div>
                        <span class="formato-pontos">:</span>
                        <div class="flex-column">
                            <span class="formato" id="seg"></span>
                            <span class="info">Segundos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex-column">
               <div id="palestrantes" class="flex-column">
                     <div class="fundo">
                        <h3>Eventos</h3>
                        <hr>
                        <ul>
                        </ul>
                    </div>
                   <div>
                        <h3>Palestrantes</h3>
                        <hr>
                    </div>
                    <div>
                        <h3>Apoio</h3>
                        <hr>
                    </div>
               <div>  
            </div>
        </div>
    </main>
    <footer>
</footer>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/lib.js"></script>
</body>
</html>