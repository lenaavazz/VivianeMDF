<?php
    include '../model/Produto.php';
    session_start();

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];
    
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    switch ($acao) {
        case 'cad':
            $obj = new controllerProduto();
            $obj->cadastrar();
            break;
        case 'list':
            $obj = new controllerProduto();
            $obj->getAllProdutos();
            break;
        case 'del':
            $obj = new controllerProduto();
            $obj->deleteProduto($id);
            break;
        default:
            break;
    }
}    

class controllerProduto{
    function cadastrar(){
        $nome = $_POST["inputName"];
        $categoria = $_POST["inputCategory"];

        $produto = new Produto();

        $produto->setNome($nome);
        $produto->setCategoria($categoria);

        $retorno = $produto->cadastrar($produto);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-produto.php?r=1");
        }else {
            header("Location: ../cadastros/cadastro-produto.php?r=2");
        }  
    } 
    
    function getAllProdutos(){
        session_start();
        $produto = new Produto();

        $_SESSION["produtos"] = $produto->getAllProdutosss();

        $_SESSION["produtos"] = json_encode($_SESSION["produtos"]);

        if($_SESSION["produtos"] != null) {
            header('Location: ../tabelas/produtos.php');
        }else {
            header("Location: ../tabelas/produtos.php?r=null");
        }
    }

    function deleteProduto($id) {
        $produto = new Produto();
        
        $produto->deleteProduto($id);
        $this->getAllProdutos();
    }
}
?>      