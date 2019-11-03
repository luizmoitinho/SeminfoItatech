
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>SEMINFO 2019</title>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--Link do css proprio-->
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rochester&display=swap" rel="stylesheet">

</head>

<body>
    <div>

    <nav id="header" class="navbar navbar-expand-lg">
        <a id="logo" class="nav" a href="index.php">
            <span>Seminfo</span>
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
                    <a href="#">Local</a>
                </li>
                <li >
                    <a href="#">Apoio</a>
                </li>
                <li >
                    <a href="#">Palestras</a>
                </li>
                <li >
                    <a  href="#"> Sobre</a>
                </li>
                <li >
                    <a  href="#">Organizadores</a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="bg-black">
        <div class="container-fluid">
            <div class="row">
                <div id="painel-cronometro">
                    <div class="flex-column">
                        <span id="seminfo"> VI SEMINFO 2019 - Evento de Tecnologia</span>
                        <span id="slogan">
                            Matenha-se conectado nas tecnologias da área de TI
                        </span>    
                        <span id="slogan">
                        com Palestras e Cursos!
                        </span> 
                        <span id="data-seminfo">Nos dias 11, 12 e 13 de Dezembro no Campus da UFS de Itabaiana.</span>    
                    </div>
                    <div id="cronometro" class="flex-row">
                        <div class="flex-column">
                            <span class="contorno-numeros" id="dias"> </span>
                            <span class="info">Dias</span>
                        </div>
                        <div class="flex-column">
                            <span class="contorno-numeros" id="horas"> </span>
                            <span class="info">Horas</span>
                        </div>
                        <span class="contorno-pontos">:</span>
                        <div class="flex-column">
                            <span class="contorno-numeros" id="min"></span>
                            <span class="info">Minutos</span>
                        </div>
                        <span class="contorno-pontos">:</span>
                        <div class="flex-column">
                            <span class="contorno-numeros">
                                <span id="seg"></span>
                            </span>
                            <span class="info">Segundos</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex-column localizacao">
                <div class="flex-row">
                    <iframe class="local-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.6844076986067!2d-37.43792471479275!3d-10.681586119682526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x70ffa833420217d%3A0xa0b15971b80f4151!2sUniversidade%20Federal%20de%20Sergipe%2C%20Campus%20Itabaiana!5e0!3m2!1spt-BR!2sbr!4v1572717954299!5m2!1spt-BR!2sbr" width="950" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                    </iframe>
                    </iframe>
                    
                </div>

            </div>
            
        </div>
        <div class="painel-eventos">
            <div class="container-fluid">
                    <div class="row">
                        <div class="info-seminfo" id="eventos">
                            <span class="topico-seminfo">Colabore com o evento</span>
                            <div class="area-patrocinadores flex-column">
                                <span class="descricao-topico">Não deixe sua empresa fora de um dos maiores eventos de tecnologia do Estado de Sergipe!</span>
                                <div class="btn-apoio"><span>Clique aqui</span></div>
                            </div>   
                            
                        </div>         
                    </div>

                </div>
            </div>
    </main>
     <footer class="" >
        <div class="rodape flex-column">
            <div class="flex-row">
               <div class="item-footer"> Produced By <span class="azul">Itatech Jr<span></div>
            </div>
            <span id="direitos"> &copy Todos os direitos reservados - 2019</span>
        </div>
     </footer>
    <script src="assets/js/jquery.min.js"></script> 
    <script src="assets/js/lib.js"></script>
</body>
</html>