<?php
include("../../back-end/validaAcesso.php");
include("../../back-end/pokemon.php");
$pok1 = criarPok();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <link rel="stylesheet" href="restrita.css">
    <link rel="stylesheet" href="../homepage/css/styles.css">
    <script src="../assets/jquery-3.6.1.min.js"></script>
    <title>IdleMon</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="../homepage/index.html">IdleMon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../../back-end/deslogar.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="areaPrincipal">
        <div class="btnLat">
            <button id="btnLoja" >
                LOJA
            </button>
            <button id="btnAmg">
                Amigos
            </button>
        </div>
        <div class="menuPrincipal">
            <div class="menuPc">
                <button id="btnEsq"><img src="../assets/setaMenuEsq.png"/></button>
                <img id="menu1" src="../assets/MenuPcForest.png" style="display: block;">
                <img id="menu2" src="../assets/menuPcRailwayM.png" style="display: none;">
                <img id="menu3" src="../assets/menuPcRailwayD.png" style="display: none;">
                <img id="menu4" src="../assets/menuPcFloor.png" style="display: none;">
                <img id="menu5" src="../assets/menuPcWater.png" style="display: none;">
                <button id="btnDir"><img src="../assets/setaMenuDir.png"/></button>
            </div>
            <div class="pc">
                <div class="gridPos">
                    <div><img class="gridPok" id="box01" src=<?=$pok1["sprite"]?>></div>
                    <div><img class="gridPok" id="box02" src=""></div>
                    <div><img class="gridPok" id="box03" src=""></div>
                    <div><img class="gridPok" id="box04" src=""></div>
                    <div><img class="gridPok" id="box05" src=""></div>
                    <div><img class="gridPok" id="box06" src=""></div>
                    <div><img class="gridPok" id="box07" src=""></div>
                    <div><img class="gridPok" id="box08" src=""></div>
                    <div><img class="gridPok" id="box09" src=""></div>
                    <div><img class="gridPok" id="box10" src=""></div>
                    <div><img class="gridPok" id="box11" src=""></div>
                    <div><img class="gridPok" id="box12" src=""></div>
                    <div><img class="gridPok" id="box13" src=""></div>
                    <div><img class="gridPok" id="box14" src=""></div>
                    <div><img class="gridPok" id="box15" src=""></div>
                    <div><img class="gridPok" id="box16" src=""></div>
                    <div><img class="gridPok" id="box17" src=""></div>
                    <div><img class="gridPok" id="box18" src=""></div>
                    <div><img class="gridPok" id="box19" src=""></div>
                    <div><img class="gridPok" id="box20" src=""></div>
                    <div><img class="gridPok" id="box21" src=""></div>
                    <div><img class="gridPok" id="box22" src=""></div>
                    <div><img class="gridPok" id="box23" src=""></div>
                    <div><img class="gridPok" id="box24" src=""></div>
                    <div><img class="gridPok" id="box25" src=""></div>
                    <div><img class="gridPok" id="box26" src=""></div>
                    <div><img class="gridPok" id="box27" src=""></div>
                    <div><img class="gridPok" id="box28" src=""></div>
                    <div><img class="gridPok" id="box29" src=""></div>
                    <div><img class="gridPok" id="box30" src=""></div>
                </div>
                <img id="pc1" class="pcImg" src="../assets/PC_Background_Forest.png" style="display: block;">
                <img id="pc2" class="pcImg" src="../assets/pcRailwayM.png" style="display: none;">
                <img id="pc3" class="pcImg" src="../assets/pcRailwayD.png" style="display: none;">
                <img id="pc4" class="pcImg" src="../assets/pcFloor.png" style="display: none;">
                <img id="pc5" class="pcImg" src="../assets/pcWater.png" style="display: none;">
            </div>
            <div class="equipe">
                <div class="gridPos" style="padding-top: 0; margin-left:5px;">
                    <div><img class="gridPok" id="equipe1" src=""></div>
                    <div><img class="gridPok" id="equipe2" src=""></div>
                    <div><img class="gridPok" id="equipe3" src=""></div>
                    <div><img class="gridPok" id="equipe4" src=""></div>
                    <div><img class="gridPok" id="equipe5" src=""></div>
                    <div><img class="gridPok" id="equipe6" src=""></div>
                </div>
                <img src="../assets/equipe.png">
            </div>
            <div class="loja">
                Ovo Comum:
                <img src="../assets/Ovo.png">
                <button id="buyComum">Comprar</button>
                Ovo Raro:
                <img src="../assets/OvoRaro.png">
                <button id="buyRaro">Comprar</button>
                Ovo Lendário:
                <img src="../assets/OvoLendario.png">
                <button id="buyLenda">Comprar</button>
            </div>
        </div>
    </section>
    <script src="restrita.js"></script>
</body>
</html>