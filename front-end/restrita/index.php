<?php
include("../../back-end/validaAcesso.php")
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
                <img id="pc1" src="../assets/PC_Background_Forest.png" style="display: block;">
                <img id="pc2" src="../assets/pcRailwayM.png" style="display: none;">
                <img id="pc3" src="../assets/pcRailwayD.png" style="display: none;">
                <img id="pc4" src="../assets/pcFloor.png" style="display: none;">
                <img id="pc5" src="../assets/pcWater.png" style="display: none;">
            </div>
            <div class="equipe">
                <img src="../assets/equipe.png">
            </div>
            <div class="loja">
                Ovo Comum:
                <img src="../assets/Ovo.png">
                <button>Comprar</button>
                Ovo Raro:
                <img src="../assets/OvoRaro.png">
                <button>Comprar</button>
                Ovo Lendário:
                <img src="../assets/OvoLendario.png">
                <button>Comprar</button>
            </div>
        </div>
    </section>
    <script src="restrita.js"></script>
</body>
</html>