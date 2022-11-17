<?php
    function sorteio($raridade){  
        require_once("conexao.php");
        $sql = "SELECT * FROM `pokemon` WHERE `pok_raridade`= $raridade";   
        $result = $con->query($sql);
        $i=0;
        while($pok = $result->fetch_assoc()){
            if($pok["pok_tier"] == 1){ 
                $sorteio[$i] = $pok["pok_id"];
                $i++;
            }     
        }
        $sortArray = rand(0,$i);
        $pokSorteio = $sorteio[$sortArray];
        return $pokSorteio;
    }
?>