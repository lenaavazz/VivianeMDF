<?php
    include '../model/Usuario.php';

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];
    
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    switch ($acao) {
        case 'cad':
            $obj = new controllerUsuario();
            $obj->cadastrar();
            break;
        case 'list':
            $obj = new controllerUsuario();
            $obj->getAllUsers();
            break;
        case 'del':
            $obj = new controllerUsuario();
            $obj->deleteUser($id);
            break;
        default:
            break;
    }
}    

class controllerUsuario{
    function cadastrar(){
        $nome = $_POST["inputName"];
        $email = $_POST["inputEmail"];
        $senha = $_POST["inputPassword"];
        $senha = md5($senha);
        $senha2 = $_POST["inputPassword2"];
        $senha2 = md5($senha2);
        $categoria = $_POST["inputCategory"];

        if($senha != $senha2){
            return header("Location: ../cadastros/cadastro-usuario.php?r=2");
        }

        $usuario = new Usuario();

        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $usuario->setCategoria($categoria);

        $retorno = $usuario->cadastrar($usuario);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-usuario.php?r=1");
        }else {
            header("Location: ../cadastros/cadastro-usuario.php?r=2");
        }  
    } 
    
    function getAllUsers(){
        session_start();
        $user = new Usuario();

        $_SESSION["usuarios"] = $user->getAllUsers();

        $_SESSION["usuarios"] = json_encode($_SESSION["usuarios"]);

        if($_SESSION["usuarios"] != null) {
            //var_dump($_SESSION["usuarios"]);
            header("Location: ../tabelas/usuarios.php");
        }else {
            //echo "deu erro";
            header("Location: ../tabelas/usuarios.php?r=null");
        }
    }

    function deleteUser($id) {
        $user = new Usuario();
        
        $user->deleteUser($id);

        $this->getAllUsers();
    }
}
?>      