<?php
include("conexao.php");
$usua = $_GET["idUsua"];
$sql = "SELECT * FROM `usuarios` WHERE `nomeDeUsuario` = '$usua'";
$result = $con->query($sql);
$userDataBase = $result->fetch_assoc();
$usuario = $userDataBase["dinheiro"];
$dado = json_encode($usuario, true);
echo $dado;
?>