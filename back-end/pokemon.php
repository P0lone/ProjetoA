<?php

function sorteio($raridade)
{
    require("conexao.php");
    $sql = "SELECT * FROM `pokemon` WHERE `pok_raridade`= '$raridade'";
    $result = $con->query($sql);
    $i = 0;
    while ($pokDB = $result->fetch_assoc()) {
        if ($pokDB["pok_tier"] == 1) {
            $sorteio[$i] = $pokDB["pok_id"];
            $i++;
        }
    }
    $sortArray = rand(0, $i);
    $pokSorteio = $sorteio[$sortArray];
    return $pokSorteio;
}

include("conexao.php");
$raridade = $_GET["raridade"];
$pokSorteio = sorteio($raridade);
$sql = "SELECT * FROM `pokemon` WHERE `pok_id`=$pokSorteio";
$result = $con->query($sql);
$pokDB = $result->fetch_assoc();
$dados = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $pokDB["pok_name"]);
$pokApi = json_decode($dados, true);
$newPok = [
    "nome" => $pokDB["pok_name"],
    "raridade" => $pokDB["pok_raridade"],
    "producao" => $pokDB["pok_producao"],
    "evolve" => $pokDB["pok_evolve"],
    "tier" => $pokDB["pok_tier"],
    "sprite" => $pokApi["sprites"]["front_default"]
];
$pok = json_encode($newPok, true);
echo  $pok;

?>