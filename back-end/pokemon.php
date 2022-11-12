<link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
<?php
    function sortear(){
    include("conexao.php");
    include("sortear.php");
    $sql = "SELECT * FROM `pokemon` WHERE `pok_id`=$pokSorteio";
    $result = $con->query($sql);
    $pok = $result->fetch_assoc();
    $dados = file_get_contents("https://pokeapi.co/api/v2/pokemon/".$pok["pok_name"]);
    $pokApi = json_decode($dados, true);
    return $pokApi["sprites"]["front_default"];
    }
?>