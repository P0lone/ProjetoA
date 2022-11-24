<?php
include("conexao.php");
$username = $_GET["username"];
$moneyDB = $_GET["moneyDB"];
$sql = "UPDATE `usuarios` SET `dinheiro`='$moneyDB' WHERE `nomeDeUsuario` = '$username'";
$result = $con->query($sql);
?>