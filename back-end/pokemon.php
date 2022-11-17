<?php
    $raridade = $_GET['raridade'];
    include("conexao.php");
    $pokSorteio = sorteio($raridade);
    $sql = "SELECT * FROM `pokemon` WHERE `pok_id`=$pokSorteio";
    $result = $con->query($sql);
    $pok = $result->fetch_assoc();
    $dados = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$pok["pok_name"]);
    $pokApi = json_decode($dados, true);
    $newPok = [
        "nome" => $pok["pok_name"],
        "raridade" => $pok["pok_raridade"],
        "produção" => $pok["pok_producao"],
        "evolve" => $pok["pok_evolve"],
        "tier" => $pok["pok_tier"],
        "sprite" => $pokApi["sprites"]["front_default"]
    ];

echo $newPok;

?>