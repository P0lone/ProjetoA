<?php
include("../../back-end/validaAcesso.php");
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
    <script src="restrita.js"></script>
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
            <div class="money">
                <img src="../assets/pokeDollar_sign.png"><?= $dinheiro = 0; ?>
            </div>
            <button id="btnLoja">
                LOJA
            </button>
        </div>
        <div class="menuPrincipal">
            <div class="menuPc">
                <button id="btnEsq"><img src="../assets/setaMenuEsq.png" /></button>
                <img id="menu1" src="../assets/MenuPcForest.png" style="display: block;">
                <img id="menu2" src="../assets/menuPcRailwayM.png" style="display: none;">
                <img id="menu3" src="../assets/menuPcRailwayD.png" style="display: none;">
                <img id="menu4" src="../assets/menuPcFloor.png" style="display: none;">
                <img id="menu5" src="../assets/menuPcWater.png" style="display: none;">
                <button id="btnDir"><img src="../assets/setaMenuDir.png" /></button>
            </div>
            <div class="pc">
                <div class="gridPos" id="gridBox">
                    <div><img class="gridPok box" id="box1" src=""></div>
                    <div><img class="gridPok box" id="box2" src=""></div>
                    <div><img class="gridPok box" id="box3" src=""></div>
                    <div><img class="gridPok box" id="box4" src=""></div>
                    <div><img class="gridPok box" id="box5" src=""></div>
                    <div><img class="gridPok box" id="box6" src=""></div>
                    <div><img class="gridPok box" id="box7" src=""></div>
                    <div><img class="gridPok box" id="box8" src=""></div>
                    <div><img class="gridPok box" id="box9" src=""></div>
                    <div><img class="gridPok box" id="box10" src=""></div>
                    <div><img class="gridPok box" id="box11" src=""></div>
                    <div><img class="gridPok box" id="box12" src=""></div>
                    <div><img class="gridPok box" id="box13" src=""></div>
                    <div><img class="gridPok box" id="box14" src=""></div>
                    <div><img class="gridPok box" id="box15" src=""></div>
                    <div><img class="gridPok box" id="box16" src=""></div>
                    <div><img class="gridPok box" id="box17" src=""></div>
                    <div><img class="gridPok box" id="box18" src=""></div>
                    <div><img class="gridPok box" id="box19" src=""></div>
                    <div><img class="gridPok box" id="box20" src=""></div>
                    <div><img class="gridPok box" id="box21" src=""></div>
                    <div><img class="gridPok box" id="box22" src=""></div>
                    <div><img class="gridPok box" id="box23" src=""></div>
                    <div><img class="gridPok box" id="box24" src=""></div>
                    <div><img class="gridPok box" id="box25" src=""></div>
                    <div><img class="gridPok box" id="box26" src=""></div>
                    <div><img class="gridPok box" id="box27" src=""></div>
                    <div><img class="gridPok box" id="box28" src=""></div>
                    <div><img class="gridPok box" id="box29" src=""></div>
                    <div><img class="gridPok box" id="box30" src=""></div>
                </div>
                <img id="pc1" class="pcImg" src="../assets/PC_Background_Forest.png" style="display: block;">
                <img id="pc2" class="pcImg" src="../assets/pcRailwayM.png" style="display: none;">
                <img id="pc3" class="pcImg" src="../assets/pcRailwayD.png" style="display: none;">
                <img id="pc4" class="pcImg" src="../assets/pcFloor.png" style="display: none;">
                <img id="pc5" class="pcImg" src="../assets/pcWater.png" style="display: none;">
            </div>
            <div class="equipe">
                <div class="gridPos" style="padding-top: 0; margin-left:5px;">
                    <div><img class="gridPok team" id="team1" src=></div>
                    <div><img class="gridPok team" id="team2" src=></div>
                    <div><img class="gridPok team" id="team3" src=></div>
                    <div><img class="gridPok team" id="team4" src=></div>
                    <div><img class="gridPok team" id="team5" src=></div>
                    <div><img class="gridPok team" id="team6" src=></div>
                </div>
                <img src="../assets/equipe.png">
            </div>
            <div class="loja">
                <div>
                    <p class="gridLoja">Ovo Comum:
                    <p>
                </div>
                <div><img class="gridLoja" src="../assets/Ovo.png"></div>
                <div><button class="gridLoja btnBuy" raridade="comum" id="buyComum">Comprar</button></div>
                <div>
                    <p class="gridLoja">Ovo Raro:</p>
                </div>
                <div><img class="gridLoja" src="../assets/OvoRaro.png"></div>
                <div><button class="gridLoja btnBuy" raridade="raro" id="buyRaro">Comprar</button></div>
                <div>
                    <p class="gridLoja">Ovo Lendário:</p>
                </div>
                <div><img class="gridLoja" src="../assets/OvoLendario.png"></div>
                <div><button class="gridLoja btnBuy" raridade="lendario" id="buyLenda">Comprar</button></div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {

            var contV = 6;
            var vazio = true;

            $(".team").click(function(e) {
                e.preventDefault();
                $(this).attr("src", "");
                $(".team").each(function() {
                    if ($(this).attr("src") == "") {
                        contV++;
                    }
                    if (contV == 6) {
                        vazio = true
                    }
                });
            });
            $(".box").click(function(e) {
                e.preventDefault();
                var verifica = true;
                var box = $(this);
                var duplicado = false;
                $(".team").each(function() {
                    if ($(this).attr("src") == "") {
                        $(".team").each(function() {
                            if ($(this).attr("src") == box.attr("src")) {
                                duplicado = true;
                                verifica = false;
                            }
                        });
                        if (duplicado == false) {
                            $(this).attr("src", box.attr("src"));
                            contV--;
                            vazio = false;
                            verifica = false;
                            return false;
                        }
                    }
                });
                if (duplicado) {
                    alert("Pokemon Repetido");
                }
                if (verifica) {
                    alert("Limite Máximo Atingido");
                }
            });
            $(".btnBuy").click(function() {
                $.ajax({
                    type: "GET",
                    url: "http://localhost/projetoa/back-end/pokemon.php",
                    datatype: "JSON",
                    data: {
                        raridade: $(this).attr("raridade")
                    },
                    success: function(response) {
                        var resp = JSON.parse(response);
                        var box = true;

                        $(".box").each(function() {
                            if ($(this).attr("src") == "") {
                                $(this).attr("src", pok.sprite);
                                alert("Pokemon Sorteado foi " + pok.nome);
                                box = false;
                                return false;
                            }
                        });
                        if (box) {
                            alert("Limite Máximo Atingido");
                        }
                    }
                }); //ajax
            }); //buy
        });

        while (vazio == false) {
            $(".team")
        }

    </script>
</body>

</html>