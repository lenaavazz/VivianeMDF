<?php
    include '../model/modelUsuario.php';

    //criando condicional de cadastro e login. Helena
if(isset($_GET["acao"])){
    $acao = $_GET["acao"];
    
    switch ($acao) {
        case 'login':
            $obj = new controllerUsuario();
            $obj->realizarLogin();
            break;
        
        case 'cad':
            $obj = new controllerUsuario();
            $obj->cadastrar();
            break;
        default:
            # code...
            break;
    }
}    
    //coloquei as funcoes dentro de uma classe. Helena
    class controllerUsuario{
        function realizarLogin(){

        }
    
        function cadastrar(){
            //1 ° Pegar as informações que estão vindo da minha view. Helena
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $cep = $_POST["cep"];
            $cidade = $_POST["cidade"];
            $senha = $_POST["senha"];
            $confirmarS = $_POST["confirmarS"];

            // 2° Montar o objeto com as informações que eu acabei de pegar. Helena
            $user = new Usuario();

            $user->setNome($nome);
            $user->setEmail($email);
            $user->setTelefone($telefone);
            $user->setCep($cep);
            $user->setCidade($cidade);
            $user->setSenha($senha);
            $user->setConfirmarS($confirmarS);

            // 3° Tratar as informações e finalizar com objeto no caso, retornar para o usuario, o que aconteceu. Helena
            //verificando a senha. Helena
            
            $user->cadastrar($user);
            
            if($user->getSenha() == $user->getConfirmarS()){
                header("Location: ../view/viewCadastro.php?r=1");
            }else if($user->getSenha() != $user->getConfirmarS()){
                header("Location: ../view/viewCadastro.php?r=2");
            }  
        }    

        /*function listar(){
            $user = new Usuario();

            $retorno = $user->listar();

            return $retorno;
        }*/
    }
?>      