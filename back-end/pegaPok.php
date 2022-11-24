<?php
include("conexao.php");
$idPok = $_GET["idPok"];
$sql = "SELECT * FROM `pokemon` WHERE `pok_id` = '$idPok'";
$result = $con->query($sql);
@$pokDB = $result->fetch_assoc();
$dados = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $pokDB["pok_name"]);
$pokApi = json_decode($dados, true);
@$newPok = [
    "id" => $pokDB["pok_id"],
    "nome" => $pokDB["pok_name"],
    "raridade" => $pokDB["pok_raridade"],
    "producao" => $pokDB["pok_producao"],
    "evolve" => $pokDB["pok_evolve"],
    "tier" => $pokDB["pok_tier"],
    "sprite" => $pokApi["sprites"]["front_default"]
];
$pok = json_encode($newPok, true);
echo $pok;
?>