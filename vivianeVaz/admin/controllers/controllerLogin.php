<?php
include "../../bancoDeDados/Conexao.php";

if(empty($_POST['email_login']) || empty($_POST['senha_login'])){
    header('Location: ../login/login.php');
    exit();
}
$conexao = Conexao::abrirConexao();

$email = $_POST['email_login'];
$senha = $_POST['senha_login'];
$senha = md5($senha);

$query = "select id, nome from usuarios where email = '".$email."' and senha = '".$senha."';";

try{
    $result = $conexao->query($query);
    if($result->rowCount() == 1){
        header("Location: ../tabelas/orcamentos.php");
    } else{
        header('Location: ../login/login.php');
    }
    
} catch(PDOException $e) {
    echo $query . "<br>" . $e->getMessage();
    echo $result->rowCount();
}
$conexao = null; 

//$row = mysqli_num_rows($result);