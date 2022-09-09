<?php

$username = $_POST["username"];
$name = $_POST["nome"];
$email = $_POST["email"];
$dtnasc = $_POST["dtnasc"];
$senha = $_POST["senha"];

include('conexao.php');

$sql_validar = "SELECT * FROM usuarios WHERE nome='$name'";
$validar = $con->query($sql_validar) or die("Falha na execução do código SQL: " . $con->error);

$quantidade = $validar->num_rows;

if ($quantidade == 1) {
    echo "Já existe este nome";
} else {

    $sql = "INSERT INTO usuarios VALUES (null, '$username', '$name', '$dtnasc', '$email', '$senha')";
    echo $sql;

    $result = $con->query($sql);

    if ($con->affected_rows > 0) {
           echo "<p>";
        echo $con->affected_rows;
        header("Location: ../../front-end/restrita/homepage.html");
    } else {
        echo "<p>Ocorreu um erro: ";
        echo $con->error;
        echo "</p>";
    }   
   
}
   


?>