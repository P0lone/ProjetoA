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
    <title>Projeto A</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="../homepage/index.html">Projeto A</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../restrita/index.php">Jogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../back-end/deslogar.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="areaPrincipal">
        <div class="menuPrincipal">
            <div class="pc">
                <img src="../assets/PC_Background_Forest.png">
            </div>
            <div class="equipe">
                <img src="../assets/equipe.png">
            </div>
        </div>
    </section>
</body>
</html>