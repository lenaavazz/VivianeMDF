<?php
    include '../model/Cliente.php';
    session_start();

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    switch ($acao) {
        case 'cad':
            $obj = new controllerCliente();
            $obj->cadastrar();
            break;
        case 'list':
            $obj = new controllerCliente();
            $obj->getAllClientes();
            break;
        case 'del':
            $obj = new controllerCliente();
            $obj->deleteCliente($id);
            $obj->getAllClientes();
            break;
        default:
            break;
    }
}    

class controllerCliente{
    function cadastrar(){
        $nome = $_POST["inputName"];
        $email = $_POST["inputEmail"];
        $endereco = $_POST["inputAddress"];
        $complemento = $_POST["inputComplement"];
        $numeroCasa = $_POST["inputHomeNumber"];
        $estado = $_POST["inputState"];
        $cidade = $_POST["inputCity"];
        $telefone = $_POST["inputPhoneNumber"];

        $cliente = new Cliente();

        $cliente->setNome($nome);
        $cliente->setEmail($email);
        $cliente->setEndereco($endereco);
        $cliente->setComplemento($complemento);
        $cliente->setNumeroCasa($numeroCasa);
        $cliente->setEstado($estado);
        $cliente->setCidade($cidade);
        $cliente->setTelefone($telefone);

        $retorno = $cliente->cadastrar($cliente);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-cliente.php?r=1");
        }else{
            header("Location: ../cadastros/cadastro-cliente.php?r=2");
        }  
    }
    
    function getAllClientes(){
        session_start();
        $cliente = new Cliente();

        $_SESSION["clientes"] = $cliente->getAllClientes();

        $_SESSION["clientes"] = json_encode($_SESSION["clientes"]);

        if($_SESSION["clientes"] != null) {
            header('Location: ../tabelas/clientes.php');
        }else {
            header("Location: ../tabelas/clientes.php?r=null");
        }
    }

    function deleteCliente($id) {
        $cliente = new Cliente();
        
        $cliente->deleteCliente($id);

        $this->getAllClientes();
    }
}
?>      