<?php
include("conexao.php");
$usua = $_GET["usua"];
$sql = "SELECT * FROM `usuarios` WHERE `nomeDeUsuario` = '$usua'";
$result = $con->query($sql);
@$userDataBase = $result->fetch_assoc();
$idUser = $userDataBase['id'];
$sql = "SELECT * FROM `assoc_pok_user` WHERE `user_id` = '$idUser'";
$result = $con->query($sql);
@$assocDB = $result->fetch_assoc();
@$usuario = [
    "money" => $userDataBase["dinheiro"],
    "pokemon" => $assocDB["pok_id"],
];
$dado = json_encode($usuario, true);
echo $dado;
?>