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
    <title>ClickerMon</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="../homepage/index.html">ClickerMon</a>
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
                <img class="pokeDolar" style="padding-right: 5px;" src="../assets/pokeDollar_sign.png"><b id="valor" style="font-weight: normal;">0</b>
            </div>
            <button class="btnJogo" id="btnLoja">
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
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box1" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box2" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box3" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box4" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box5" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box6" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box7" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box8" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box9" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box10" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box11" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box12" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box13" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box14" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box15" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box16" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box17" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box18" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box19" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box20" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box21" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box22" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box23" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box24" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box25" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box26" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box27" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box28" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box29" src=""></div>
                    <div><img class="gridPok box" idPok="" producao="" tier="" nome="" evolve="" id="box30" src=""></div>
                </div>
                <img id="pc1" class="pcImg" src="../assets/PC_Background_Forest.png" style="display: block;">
                <img id="pc2" class="pcImg" src="../assets/pcRailwayM.png" style="display: none;">
                <img id="pc3" class="pcImg" src="../assets/pcRailwayD.png" style="display: none;">
                <img id="pc4" class="pcImg" src="../assets/pcFloor.png" style="display: none;">
                <img id="pc5" class="pcImg" src="../assets/pcWater.png" style="display: none;">
            </div>
            <div class="equipe">
                <div class="gridPos" style="padding-top: 0; margin-left:5px;">
                    <div><img class="gridPok team" producao="" id="team1" src=></div>
                    <div><img class="gridPok team" producao="" id="team2" src=></div>
                    <div><img class="gridPok team" producao="" id="team3" src=></div>
                    <div><img class="gridPok team" producao="" id="team4" src=></div>
                    <div><img class="gridPok team" producao="" id="team5" src=></div>
                    <div><img class="gridPok team" producao="" id="team6" src=></div>
                </div>
                <img src="../assets/equipe.png">
                <button class="btnJogo" id="addMoney">Gerar Dinheiro</button>
            </div>
            <div class="loja">
                <div>
                    <p class="gridLoja">Ovo Comum:
                    <p>
                </div>
                <div><img class="gridLoja ovoLoja" src="../assets/Ovo.png"></div>
                <div><button class="gridLoja btnBuy" preco="200" raridade="comum" id="buyComum">Comprar por <img class="pokeDolar" src="../assets/pokeDollar_sign.png"> 200</button></div>
                <div>
                    <p class="gridLoja">Ovo Raro:</p>
                </div>
                <div><img class="gridLoja ovoLoja" src="../assets/OvoRaro.png"></div>
                <div><button class="gridLoja btnBuy" preco="800" raridade="raro" id="buyRaro">Comprar por <img class="pokeDolar" src="../assets/pokeDollar_sign.png"> 800</button></div>
                <div>
                    <p class="gridLoja">Ovo Lendário:</p>
                </div>
                <div><img class="gridLoja ovoLoja" src="../assets/OvoLendario.png"></div>
                <div><button class="gridLoja btnBuy" preco="3000" raridade="lendario" id="buyLenda">Comprar por <img class="pokeDolar" src="../assets/pokeDollar_sign.png"> 3000</button></div>
            </div>
        </div>
        <div class="escolhePok">
            <p class="textEscolhePok">Olá, parace que você não possui nenhum Pokémon ainda, escolha um destes 3 Pokemons para ser seu inical:</p>
            <button class="btnEscolhePok" id="1">
                <img src="../assets/bulba.png">
            </button>
            <button class="btnEscolhePok" id="4">
                <img src="../assets/char.png">
            </button>
            <button class="btnEscolhePok" id="7">
                <img src="../assets/squirtle.png">
            </button>
        </div>
        <div class="apagarPok">
            <p class="textEscolhePok">Quer soltar seu pokemon?</p>
            <button class="btnApagar" apagar="t" style="background-color: #DB3545;">
                Sim
            </button>
            <button class="btnApagar" apagar="f" style="background-color: #67DB14;">
                Não
            </button>
        </div>
    </section>

    <script>
        $(document).ready(function() {

            var usuario = '<?php echo $_SESSION["usuario"]; ?>';
            var dinheiro = 0;
            var addDinheiro;

            $(".team").click(function(e) {
                e.preventDefault();
                $(this).attr("src", "");
                $(this).attr("producao", "");
            });//pagar time

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
                            $(this).attr("producao", box.attr("producao"));
                            verifica = false;
                            return false;
                        }
                    }
                });
                if (duplicado) {
                    apagarPoke($(this));
                }
                if (verifica) {
                    alert("Limite Máximo Atingido");
                }
            });//add time

            $(".btnBuy").click(function() {
                if (dinheiro < $(this).attr("preco")) {
                    alert("Dinheito Insuficiente")
                    return false;
                }
                dinheiro = dinheiro - $(this).attr("preco");
                $("#valor").html(dinheiro);
                $.ajax({
                    type: "GET",
                    url: "http://localhost/projetoa/back-end/transfereMoney.php",
                    data: {
                        username: usuario,
                        moneyDB: dinheiro,
                    },
                    dataType: "JSON",
                });
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
                                $(this).attr("src", resp.sprite);
                                $(this).attr("producao", resp.producao);
                                $(this).attr("evolve", resp.evolve);
                                $(this).attr("tier", resp.tier);
                                $(this).attr("nome", resp.nome);
                                $(this).attr("idPok", resp.id);
                                alert("Pokemon Sorteado foi " + resp.nome);

                                $.ajax({
                                    type: "GET",
                                    url: "http://localhost/projetoa/back-end/transferePok.php",
                                    data: {
                                        username: usuario,
                                        pokId: resp.id,
                                    },
                                    dataType: "JSON",
                                });
                                box = false;
                                return false;
                            }
                        });
                        if (box) {
                            alert("Limite Máximo Atingido");
                        }
                    }
                });
            }); //buy

            $("#addMoney").click(function(e) {
                e.preventDefault();
                $(".team").each(function() {
                    if ($(this).attr("src") != "") {
                        addDinheiro = parseInt($(this).attr("producao"));
                        addDinheiro = addDinheiro + dinheiro;
                        dinheiro = addDinheiro;
                        $("#valor").html(dinheiro);
                    }
                });
                $.ajax({
                    type: "GET",
                    url: "http://localhost/projetoa/back-end/transfereMoney.php",
                    data: {
                        username: usuario,
                        moneyDB: dinheiro,
                    },
                    dataType: "JSON",
                });
            });//click

            $.ajax({
                type: "GET",
                url: "http://localhost/projetoa/back-end/pegaDado.php",
                datatype: "JSON",
                data: {
                    usua: usuario,
                },
                success: function(response) {
                    var resp = JSON.parse(response);
                    if (resp.length < 1) {
                        $(".escolhePok").css("display", "block");
                        return false;
                    } else {
                        for (let index = 0; index < resp.length; index++) {
                            if (index == 30) return false;
                            var box = "#box" + (index + 1);
                            $(box).attr("src", resp[index].sprite);
                            $(box).attr("producao", resp[index].producao);
                        }
                    }

                }
            });//ajaxPok
            
            $.ajax({
                type: "GET",
                url: "http://localhost/projetoa/back-end/pegaDinheiro.php",
                data: {
                    idUsua: usuario,
                },
                dataType: "JSON",
                success: function(response) {
                    var resp = JSON.parse(response);
                    dinheiro = resp;
                    $("#valor").html(dinheiro);
                }
            });//ajaxMoney

            $(".btnEscolhePok").click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "GET",
                    url: "http://localhost/projetoa/back-end/pegaPok.php",
                    datatype: "JSON",
                    data: {
                        idPok: $(this).attr("id")
                    },
                    success: function(response) {
                        var resp = JSON.parse(response);
                        var box = true;

                        $(".box").each(function() {
                            if ($(this).attr("src") == "") {
                                $(this).attr("src", resp.sprite);
                                $(this).attr("producao", resp.producao);
                                $(this).attr("evolve", resp.evolve);
                                $(this).attr("tier", resp.tier);
                                $(this).attr("nome", resp.nome);
                                $(this).attr("idPok", resp.id);
                                alert("Pokemon Escolhido foi " + resp.nome);
                                return false;
                            }
                        });

                        $.ajax({
                            type: "GET",
                            url: "http://localhost/projetoa/back-end/transferePok.php",
                            data: {
                                username: usuario,
                                pokId: resp.id,
                            },
                            dataType: "JSON",
                        });
                        $(".escolhePok").css("display", "none");

                    }
                });
            });//escolher

            function apagarPoke($pok, $pokTeam) {
                $(".apagarPok").css("display", "block");
                $(".btnApagar").click(function(e) {
                    e.preventDefault();
                    if ($(this).attr("apagar") == 't') {
                        $.ajax({
                            type: "GET",
                            url: "http://localhost/projetoa/back-end/apagarPok.php",
                            data: {
                                pokemonId: $($pok).attr("idPok")
                            },
                            dataType: "JSON",
                        });
                        $(".team").each(function() {
                            if ($(this).attr("src") == $($pok).attr("src")) {
                                $(this).attr("src", "");
                                $(this).attr("producao", "");
                            }
                        });
                        $($pok).attr("src", "");
                        $($pok).attr("producao", "");
                        $($pok).attr("evolve", "");
                        $($pok).attr("tier", "");
                        $($pok).attr("nome", "");
                        $($pok).attr("idPok", "");
                        $(".apagarPok").css("display", "none");
                        return false;
                    } else {
                        $(".apagarPok").css("display", "none");
                    }
                });
            };//apagar

        });//document
    </script>
</body>

</html>