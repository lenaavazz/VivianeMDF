<?php
    include '../model/Orcamento.php';
    session_start();

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }
    
    switch ($acao) {
        case 'cad':
            $obj = new controllerOrcamento();
            $obj->cadastrar();
            break;
        case 'list':
            $obj = new controllerOrcamento();
            $obj->getAllOrcamentos();
            break;
        case 'del':
            $obj = new controllerOrcamento();
            $obj->deleteOrcamento($id);
            break;
        default:
            break;
    }
}    

class controllerOrcamento{
    function cadastrar(){
        $produto = $_POST["inputProduct"];
        $cliente = $_POST["inputClient"];
        $enderecoEntrega = $_POST["inputAddress"];
        $dataEntrega = $_POST["inputDate"];
        $descricao = $_POST["inputDescription"];

        $orcamento = new Orcamento();

        $orcamento->setProduto($produto);
        $orcamento->setCliente($cliente);
        $orcamento->setEnderecoEntrega($enderecoEntrega);
        $orcamento->setDataEntrega($dataEntrega);
        $orcamento->setDescricao($descricao);

        $retorno = $orcamento->cadastrar($orcamento);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-orcamento.php?r=1");
        }else{
            header("Location: ../cadastros/cadastro-orcamento.php?r=2");
        }  
    }
    
    function getAllOrcamentos(){
        session_start();
        $orcamento = new Orcamento();

        $_SESSION["orcamentos"] = $orcamento->getAllOrcamentos();

        $_SESSION["orcamentos"] = json_encode($_SESSION["orcamentos"]);

        if($_SESSION["orcamentos"] != null) {
            header('Location: ../tabelas/orcamentos.php');
        }else {
            header("Location: ../tabelas/orcamentos.php?r=null");
        }
    }

    function deleteOrcamento($id) {
        $orcamento = new Orcamento();
        
        $orcamento->deleteOrcamento($id);

        $this->getAllOrcamentos();
    }
}
?>      