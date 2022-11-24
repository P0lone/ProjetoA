<?php
include("conexao.php");
$username = $_GET["username"];
$pokId2 = $_GET["pokId"];
$sql = "SELECT * FROM `usuarios` WHERE `nomeDeUsuario` = '$username'";
$result = $con->query($sql);
$resultado = $result->fetch_assoc();
$idUser2 = $resultado["id"];
$sql2 = "INSERT INTO `assoc_pok_user` (`pok_id`, `user_id`) VALUES ($pokId2,$idUser2)";
$result2 = $con->query($sql2);
?>