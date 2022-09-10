<?php   
session_start();

@$nome = $_SESSION['usuario'];
@$senha = $_SESSION["senha"];

include("conexao.php");

$sql = "SELECT * FROM usuarios WHERE nomeDeUsuario='$nome' AND senha='$senha'";
$result = $con->query($sql);

if($result->num_rows != 1){
    echo "<p>Conteúdo não disponível.</p>";
    echo "<a href=\"../login/login.html\">Voltar</a>";
    exit;
}

?>