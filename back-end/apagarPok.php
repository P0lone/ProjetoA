<?php
include("conexao.php");
$pokemonId = $_GET["pokemonId"];
$sql = "DELETE FROM `assoc_pok_user` WHERE `assoc_pok_user`.`pok_id`=$pokemonId";
$result = $con->query($sql);
?>