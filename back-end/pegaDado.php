<?php
include("conexao.php");
$usua = $_GET["usua"];
$sql = "SELECT * FROM `usuarios` WHERE `nomeDeUsuario` = '$usua'";
$result = $con->query($sql);
@$userDataBase = $result->fetch_assoc();
$idUser = $userDataBase['id'];
$sql = "SELECT * FROM `assoc_pok_user` WHERE `user_id` = '$idUser'";
$result = $con->query($sql);
$resposta = [];
while($assocDB = $result->fetch_assoc()){
    $dados = file_get_contents("https://pokeapi.co/api/v2/pokemon/" . $assocDB["pok_id"]) ;
    $pokApi = json_decode($dados, true);
    $idPok = $assocDB["pok_id"];
    $sql = "SELECT * FROM `pokemon` WHERE `pok_id` = '$idPok'";
    $resultado = $con->query($sql);
    @$pokDB = $resultado->fetch_assoc();
    @$newPok = [
        "id" => $pokDB["pok_id"],
        "producao" => $pokDB["pok_producao"],
        "sprite" => $pokApi["sprites"]["front_default"]
    ];
    array_push($resposta, $newPok); 
}
$dado = json_encode($resposta, true);
echo $dado;
