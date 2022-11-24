<?php

$username = trim($_POST["username"]);
$name = $_POST["nome"];
$email = $_POST["email"];
$dtnasc = $_POST["dtnasc"];
$senha = md5(trim($_POST["senha"]));

include('conexao.php');

$sql_validar = "SELECT * FROM usuarios WHERE nome='$name'";
$validar = $con->query($sql_validar) or die("Falha na execução do código SQL: " . $con->error);

$quantidade = $validar->num_rows;

if ($quantidade == 1) {
    echo "<p>Já existe este nome<p/>";
    echo "<a href = \"../front-end/cadastro/cadastro.html\"> Voltar<a/>";
} else {

    $sql = "INSERT INTO usuarios VALUES (null, '$username', '$name', '$dtnasc', '$email', '$senha', '400')";
    echo $sql;

    $result = $con->query($sql);

    if ($con->affected_rows > 0) {
           echo "<p>";
        echo $con->affected_rows;
        session_start();
        $_SESSION["usuario"] = $username;
        $_SESSION["senha"] = $senha;
        header("Location: ../front-end/restrita/index.php");
    } else {
        echo "<p>Ocorreu um erro: ";
        echo $con->error;
        echo "</p>";
    }   
   
}
   


?>