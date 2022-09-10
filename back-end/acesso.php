<?php
    session_start();
    
    include("conexao.php");
   
    $login = "";
    $senha = "";

    if(isset($_POST["username"])){
        $login = trim($_POST["username"]);
        }
        
    if(isset($_POST["senha"])){
        $senha = md5(trim($_POST["senha"]));
    }

    $sql = "SELECT * FROM usuarios WHERE nomeDeUsuario='$login' AND senha='$senha'";
    $result = $con->query($sql);

    if($result->num_rows == 1){
        $dados = $result->fetch_assoc();
        $_SESSION['usuario'] = $dados["nomeDeUsuario"];
        $_SESSION['senha'] = $dados["senha"];
        header("Location: ../front-end/restrita/index.php");
        exit;
    } else{
        echo "<p>Usuário não encontrado</p>";
        echo "<a href=\"../front-end/login/login.html\">Voltar</a>";   
    }

?>